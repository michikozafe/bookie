// Alert Timeout
setTimeout(() => {
  document.querySelector('.msg').remove();
}, 4000);

// Add Modal
const addCloseBtn = document.querySelector('.addCloseBtn');
const addModalBtn = document.querySelector('#addModalBtn');
const addModal = document.querySelector('#addModal');

addModalBtn.onclick = () => (addModal.style.display = 'block');
addCloseBtn.onclick = () => (addModal.style.display = 'none');

// Edit Modal
const editModal = id => {
  const editModal = document.querySelector(`#edit${id}`);
  const editCloseBtn = document.querySelector(`.editCloseBtn${id}`);

  editModal.style.display = 'block';
  editCloseBtn.onclick = () => (editModal.style.display = 'none');
};

// Delete Modal
const deleteModal = id => {
  const deleteModal = document.querySelector(`#delete${id}`);
  const deleteCloseBtn = document.querySelector(`.deleteCloseBtn${id}`);
  console.log(deleteModal)
  console.log(id)
  deleteModal.style.display = 'block';
  deleteCloseBtn.onclick = () => (deleteModal.style.display = 'none');
};