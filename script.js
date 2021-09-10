const newButton = document.getElementById('add_new');
const cancelButton = document.getElementById('cancel');
const sendButton = document.getElementById('send');
const modal = document.getElementById('container_modal');
const modalBackground = document.getElementById('bg');

newButton.addEventListener('click', openNewModal);
cancelButton.addEventListener('click', closeNewModal);
modalBackground.addEventListener('click', closeNewModal);

function openNewModal() {
    modal.style.display = 'flex';
}

function closeNewModal() {
    modal.style.display = 'none';
}

function deletar(){
    let confirmacao = confirm("Deseja deletar o funcionário?");

    if (confirmacao){
        window.location = "acaoDeletar.php?id=" == idFuncionario;
    }
}
