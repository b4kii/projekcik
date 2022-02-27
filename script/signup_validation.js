const form = document.getElementById("sform");
const username = document.getElementById("username");
const passwd = document.getElementById("passwd");
const passwdRep = document.getElementById("repeat");
const email = document.getElementById("email");

form.addEventListener('submit', (e) => {
    if (checkInputs() > 0) {
        e.preventDefault();
    }
});

function checkInputs() {
    const usernameValue = username.value.trim();
    const passwdValue = passwd.value.trim();
    const passwdRepValue = passwdRep.value.trim();
    const emailValue = email.value.trim();
    let count = 0;

    // TODO: More validations

    if(usernameValue === '') {
        setErrorFor(username, 'Nazwa użytkownika nie może być pusta!');
        count++;
    } else {
        setSuccesFor(username);
    }

    if(passwdValue === '') {
        setErrorFor(passwd, 'Hasło nie może być puste!');
        count++;
    } else if (passwdValue.length < 8) {
        setErrorFor(passwd, 'Hasło musi mieć minimum 8 znaków!');
        count++;
    } else {
        setSuccesFor(passwd);
    }

    if(passwdRepValue === '') {
        setErrorFor(passwdRep, 'Powtórz hasło nie może być puste!');
        count++;
    } else if (passwdValue !== passwdRepValue) {
        setErrorFor(passwdRep, 'Hasła nie pasują!')
        count++;
    } else {
        setSuccesFor(passwdRep);
    }

    if(emailValue === '') {
        setErrorFor(email, 'Email nie może być pusty!');
        count++;
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Niepoprawny format email!')
        count++;
    } else {
        setSuccesFor(email);
    }
    return count;
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    // error message inside small tag
    small.innerText = message;

    // error class 
    formControl.className = 'form-control error';
}

function setSuccesFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isEmail(email) {
    return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
