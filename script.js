let inputNom = document.getElementById('nom');
let fauxNom = document.getElementById('nomfaux');
const regexNom = /^[a-z]+$/i;
if (inputNom){
  inputNom.addEventListener('change', verifierNom);
  function verifierNom(x){
    if (!x.target.value.match(regexNom)){
        fauxNom.textContent = 'Nom invalide';
        }else{
        fauxNom.textContent = '';
    }
  }
}

let inputPrenom = document.getElementById('prenom');
let fauxPrenom = document.getElementById('prenomfaux');
if (inputPrenom){
  inputPrenom.addEventListener('change', verifierPrenom);
  function verifierPrenom(x){
    if (!x.target.value.match(regexNom)){
        fauxPrenom.textContent = 'Prénom invalide';
        }else{
        fauxPrenom.textContent = '';
    }
  }
}

let inputDate = document.getElementById('date');
let fausseDate = document.getElementById('faussedate');
let regexDate = '^[0-9]{2}/[0-9]{2}/[0-9]{4}$';
if (inputDate){
  inputDate.addEventListener('change', verifierDate);
  function verifierDate(x){
    if (!x.target.value.match(regexDate)){
      fausseDate.textContent = 'Date invalide';
    }else{
      fausseDate.textContent = '';
    }
  }
}

let inputMail = document.getElementById('mail');
let mailFaux = document.getElementById('mailfaux');
let regexMail = /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
if(inputMail){
  inputMail.addEventListener('change', verifierMail);

  function verifierMail(x){
    if (!x.target.value.match(regexMail)){
      mailFaux.textContent = 'Mail invalide';
    }else{
      mailFaux.textContent = '';
    }
  }
}

let inputSelect = document.querySelectorAll('.select');
let selectConsigne = document.getElementById('select-consigne');
for (let input of inputSelect){
  input.addEventListener('change', (event) => {
    selectConsigne.textContent = '';
  });
}