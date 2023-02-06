(function(){
    const url = 'https://picsum.photos/v2';
    fetch(`${url}/list`)
    .then(resp => {
        if(resp.ok && resp.status==200){
            return resp.json();
        }
    })
    .then(data => {
        for(let item of data){
            document.getElementById("contenido").innerHTML += `
            <div class="card-group">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="${item.download_url}" alt="...">
            <div class="card-body">
              <h5 class="card-title">${item.author}</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="${item.url}" class="btn btn-primary">mas informacion</a>
            </div>
          </div>
          </div>`;
        }
    })
    .catch(resp => console.log("error en el llamado del API"))
})()