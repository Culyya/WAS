var tts = window.speechSynthesis;
var voices = [];
var rateIndicator = document.getElementById('rateIndicator');
var rateInput = document.getElementById('rateInput');
var pitchIndicator = document.getElementById('pitchIndicator');
var pitchInput = document.getElementById('pitchInput');
rateInput.addEventListener('change',function(){
  rateIndicator.textContent = rateInput.value
})


pitchInput.addEventListener('change',function(){
  pitchIndicator.textContent = pitchInput.value
})
	GetVoices();
	// to make sure the speechsyntesis is exist on chrome
	if (speechSynthesis !== undefined) {
	  speechSynthesis.onvoiceschanged = GetVoices;
	}
	function speak() {
		var voiceList = document.querySelector('#voiceList');
		var txtPanggilan = document.querySelector('#panggilan');
		var txtSection = document.querySelector('#section');
		var txtTempatpertemuan = document.querySelector('#tempatpertemuan');
        var txtMeeting = document.querySelector('#meeting');
		var btnSpeak = document.querySelector('#btnSpeak');
		var stringToSpeech =" MOHON PERHATIAN !, PANGGILAN KEPADA : " +txtPanggilan.value +", SECTION : " +txtSection.value +" DIMOHON SEGERA KE TEMPAT PERTEMUAN DI: "+txtTempatpertemuan.value +" UNTUK MELAKUKAN MEETING: "+txtMeeting.value +" TERIMAKASIH";

		var toSpeak = new SpeechSynthesisUtterance(stringToSpeech);
		var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
		console.log(selectedVoiceName);
		voices.forEach(voice => {
		if (voice.name === selectedVoiceName) {
		  toSpeak.voice = voice;
		}
		});
    toSpeak.rate = rateInput.value
    toSpeak.pitch = pitchInput.value
		tts.speak(toSpeak);
	}
    

    function GetVoices() {
      voices = tts.getVoices();
      voiceList.innerHTML = '';
      voices.forEach((voice) => {
        var listItem = document.createElement('option');
        listItem.textContent = voice.name;
        listItem.setAttribute('data-lang', voice.lang);
        listItem.setAttribute('data-name', voice.name);
        voiceList.appendChild(listItem);
      });

      voiceList.selectedIndex = 14;
    }