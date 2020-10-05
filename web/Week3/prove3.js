var removeButtons = document.getElementsByClassName('btn-danger')
for (var i = 0; i < removeButtons; i++) {
    var button = removeButtons[i]
    button.addEventListener('click', function(event) {
        var buttonClicked = event.target
        buttonClicked.parentElement.remove()
    })
}

var addButtons = document.getElementsByClassName('add')
for (var i = 0; i <addButtons.length; i++) {
    var button = addButtons[i]
    
}