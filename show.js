$( document ).ready(function() {

const myHeaders = new Headers();

const myRequest = new Request('GET /api/v1/sites/f98d50f5-6ad4-4119-a051-374f8094c048/submissions', {
  method: 'GET',
  headers: myHeaders,
  mode: 'cors',
  cache: 'default',
});

fetch(myRequest)
  .then((response) => response.blob())
  .then((myBlob) => {
    myImage.src = URL.createObjectURL(myBlob);
  });

}
