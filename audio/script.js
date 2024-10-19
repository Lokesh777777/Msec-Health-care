document.addEventListener('DOMContentLoaded', () => {
    const startButton = document.getElementById('startRecording');
    const stopButton = document.getElementById('stopRecording');
    const playButton = document.getElementById('playRecording');
    const audioPlayback = document.getElementById('audioPlayback');

    let mediaRecorder;
    let audioChunks = [];

    // Check for browser support
    if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
        alert('Your browser does not support the MediaRecorder API.');
        return;
    }

    // Start recording
    startButton.addEventListener('click', () => {
        navigator.mediaDevices.getUserMedia({ audio: true })
            .then(stream => {
                mediaRecorder = new MediaRecorder(stream);
                mediaRecorder.ondataavailable = event => {
                    audioChunks.push(event.data);
                };
                mediaRecorder.onstop = () => {
                    const audioBlob = new Blob(audioChunks, { type: 'audio/wav' });
                    const audioUrl = URL.createObjectURL(audioBlob);
                    audioPlayback.src = audioUrl;
                    playButton.disabled = false;
                };
                mediaRecorder.start();
                startButton.disabled = true;
                stopButton.disabled = false;
            })
            .catch(error => {
                console.error('Error accessing microphone:', error);
            });
    });

    // Stop recording
    stopButton.addEventListener('click', () => {
        if (mediaRecorder) {
            mediaRecorder.stop();
            startButton.disabled = false;
            stopButton.disabled = true;
        }
    });

    // Play recording
    playButton.addEventListener('click', () => {
        audioPlayback.play();
    });
});
