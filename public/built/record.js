const start = document.getElementById("start");
const stop = document.getElementById("stop");
const video = document.querySelector("video");
let recorder, stream;


// function proposed to save the blob

 function getUrl(url,completeBlob)
{
  console.log('uploading',url);

  let formData = new FormData();
  formData.append('record_screen', url);
  formData.append('file', completeBlob);

  axios({
      method: 'post',
       url: '/media-tab',
       data: formData,
       headers: {
        'Content-Type': 'multipart/form-data'
       },
    })
    .then(response => {
      console.log(response);
    })
    .catch(err => {
      console.log(err);
    });

  // let formData = new FormData();
  // formData.append('record_screen', url);
  // axios({
  //   method: "POST", 
  //   url:  "/media-tab",
  //   data: formData,
  // }).then(response =>{
  //   //console.log(response.data);

  // });

  // const form = document.getElementById('record');
  // const formdata = new FormData(form);
  // formdata.append('record_screen', completeBlob)
  // form.onsubmit =  axios.post('/media-tab', formdata).then(response =>{
  //   console.log(response.data);
  // })

  //   axios.post('/media-tab', {
  //     record_screen: completeBlob
  //   }).then(response =>{
  //     console.log(response.data);
  // });

}

async function startRecording() {
  stream = await navigator.mediaDevices.getDisplayMedia({
    video: { mediaSource: "screen" }
  });
  recorder = new MediaRecorder(stream);

  const chunks = [];
  recorder.ondataavailable = e => chunks.push(e.data);
  recorder.onstop = e => {
    const completeBlob = new Blob(chunks, { type: chunks[0].type });
    var url =  video.src = window.URL.createObjectURL(completeBlob);
    console.log(completeBlob);
    getUrl(url,completeBlob);
    let a = document.createElement("a")
    a.href = url
    a.download = "record.webm"
    document.getElementById("download").appendChild(a)
    document.getElementById("download").addEventListener('click', () => {
      a.click()
    });
    
  };

  recorder.start();
}

start.addEventListener("click", () => {
  start.setAttribute("disabled", true);
  stop.removeAttribute("disabled");

  startRecording();
});

stop.addEventListener("click", () => {
  stop.setAttribute("disabled", true);
  start.removeAttribute("disabled");

  recorder.stop();
  stream.getVideoTracks()[0].stop();
});

