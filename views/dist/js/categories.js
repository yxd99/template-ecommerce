$('.table').on('click', '.btnEdit', function(){
  const id = $(this).attr('idCategorie');
  const description = $(`#cat${id}`).text();
  $('#idEdit').val(id);
  $('#edit-description').val(description);
});

$('.table').on('click', '.btnDelete', function(){
  const id = $(this).attr('idCategorie');
  const description = $(`#cat${id}`).text();
  $('#idDelete').val(id);
  $('#delete-description').val(description);
});