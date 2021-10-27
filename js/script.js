function outputUpdate(vol) {
    var output = document.querySelector('#volume');
    document.getElementById('ccc').style.borderColor = 'hsl('+vol+', 100%, 50%)';
    document.getElementById('fader').style.backgroundColor = 'hsl('+vol+', 100%, 50%)';
    document.getElementsByClassName('header-logo-link').style.color = 'hsl('+vol+', 100%, 50%)';
    output.style.background = 'hsl('+vol+', 100%, 50%)';
}