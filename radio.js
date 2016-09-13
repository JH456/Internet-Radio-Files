var mouseDown = false;
var vol = 1.0;
var muted = false;

function play() {
	var rSwitch = document.getElementById('radioSwitch');
	if (rSwitch.innerHTML.indexOf("<i class=\"fa fa-refresh fa-5x\"></i>") > -1) {
		document.getElementById('radioSwitch').innerHTML = "<i class=\"fa fa-refresh fa-spin fa-5x\"></i>";
	}
	else {
		document.getElementById('radioSwitch').innerHTML = "<i class=\"fa fa-refresh fa-5x\"></i>";
	}
	var radio = document.getElementById('radio');
	if (radio.paused) radio.play();
	else radio.pause();
}

function volume(increment) {
	mouseDown = true;
	vol += increment;
	document.getElementById('radio').volume = vol;

	if (document.getElementById('radio').volume != 0) {
		document.getElementById('mute').innerHTML = "<i class=\"fa fa-volume-off\"></i>";
	}

	setTimeout(function(){volume2(increment);}, 200);
}

function volume2(increment) {
	if (mouseDown) {
		vol += increment;
		document.getElementById('radio').volume = vol;
		setTimeout(function(){volume2(increment);}, 200);		
	}
}

function mute() {
	if (muted) {
		document.getElementById('radio').volume = vol;
		document.getElementById('mute').innerHTML = "<i class=\"fa fa-volume-off\"></i>";
		muted = false;
	}
	else {
		document.getElementById('radio').volume = 0;
		document.getElementById('mute').innerHTML = "<i class=\"fa fa-music\"></i>";
		muted = true;
	}
}

document.body.onmouseup = function() {
  mouseDown = false;
}