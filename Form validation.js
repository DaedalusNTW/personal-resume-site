document.getElementById('verification').innerHTML = `<div><input id = "verification-button" type = "checkbox" required>Are you human?</div>`

function antiSpam(){
      if(document.contactForm.botTrap.checked){
            alert('The anti spam script was triggered. If you are a human, please refresh the page and send the form again.')
            return false
      }
}



