// Alert Timeout
setTimeout(() => {
  document.querySelector('.msg').remove();
}, 4000);

// Add Modal
const addCloseBtn = document.querySelector('.addCloseBtn');
const addModalBtn = document.querySelector('#addModalBtn');
const addModal = document.querySelector('#addModal');

addModalBtn.onclick = () => addModal.style.display = 'block';
addCloseBtn.onclick = () => addModal.style.display = 'none';
  
// Edit Modal
function openModal(id) {
  console.log(id);
}






