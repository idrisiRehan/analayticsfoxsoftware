var savedUsers = {};
var $selectUser = 0;
$(document).ready(function () {
  fetchUserData();
  function fetchUserData() {
    fetch("https://jsonplaceholder.typicode.com/users/")
      .then((response) => response.json())
      .then((users) => {
        let output = "";
        users.forEach(function (user) {
          output += `
        <tr class='py-0 searchList'>
        <th scope='row' >${user.id}</th>
        <td class='text-center'> 
        <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input userSelector" id="User${user.id}" data-userid=${user.id}>
        <label class="custom-control-label" for="User${user.id}"></label>
        </div>
        </td>
        <td>${user.name}</td>
        <td>${user.username}</td>
        <td>${user.email}</td>
        <td><button type='button' class='btn indigo white-text btn-sm fetchUser' data-toggle='modal' data-target='#userModal' data-userid='${user.id}'>
        <i class="fas fa-info-circle fa-2x"></i>
        </button></td></tr>
        `;
        });

        $("#userList").append(output);
        $(".removeAfterLoad").remove();
      });
  }
  $(document.body).on("click", ".fetchUser", function () {
    $userId = $(this).data("userid");
    fetch("https://jsonplaceholder.typicode.com/users/" + $userId)
      .then((response) => response.json())
      .then((users) => {
        let output = `
        <p>Name : ${users.name}</p>
        <p>Username : ${users.username}</p>
        <p>Email : ${users.email}</p>
        <p>Address : ${users.address.street}, ${users.address.suite}, ${users.address.city},
            ${users.address.zipcode}</p>
        <p>Phone : ${users.phone}</p>
        <p>Website : ${users.website}</p>
        <p>Company : ${users.company.name} <em>${users.company.catchPhrase}</em> </p>
        <p class='ml-5'> ${users.company.bs}</p>
        `;
        $("#userModal .modal-body").html(output);
        $("#userModal .modal-title").html(`${users.name}`);
      });
  });
  $(document.body).on("change", ".userSelector", function () {
    savedUsers[$(this).data("userid") + "userId"] = $(this).data("userid");
    if ($("input:checkbox:checked").length > 0)
      $("#saveUsers").removeAttr("disabled");
    else $("#saveUsers").attr("disabled", "true");
  });
  $(document.body).on("click", "#saveUsers", function () {
    console.log(savedUsers);
    $(".userSelector").each(function () {
      $(this).prop("checked", false);
    });
  });
  $(".filterSearch").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $(".searchList").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});
