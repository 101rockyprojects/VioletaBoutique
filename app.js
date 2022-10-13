const modalBow = document.querySelector('#moño')
const viewBow =  document.querySelector('#container')
const bows = [
  {
    title: "Rosa",
    imgURL: './img/moños/moño.jpg',
    description: "Lorem Lorem Lorem",
    category: 'Infantiles',
    id: 1
  },
  {
    title: "Rosa",
    imgURL: './img/moños/moño2.png',
    description: "Lorem Lorem Lorem",
    category: 'Infantiles',
    id: 2
  },
  {
    title: "Rosa",
    imgURL: './img/moños/moño3.jpg',
    description: "Lorem Lorem Lorem",
    category: 'Infantiles',
    id: 3
  },
  {
    title: "Azul",
    imgURL: './img/moños/moñoh.jpg',
    description: "Lorem Lorem Lorem",
    category: 'Mujer',
    id: 4
  },
  {
    title: "Gris-Azul",
    imgURL: './img/moños/moñoh2.jpg',
    description: "Lorem Lorem Lorem",
    category: 'Hombre',
    id: 5
  },
  {
    title: "Azul",
    imgURL: './img/moños/moñoh3.jpg',
    description: "Lorem Lorem Lorem",
    category: 'Hombre',
    id: 6
  },
  {
    title: "Verde",
    imgURL: './img/moños/moñom.jpg',
    description: "Lorem Lorem Lorem",
    category: 'Mujer',
    id: 7
  },
  {
    title: "Morado",
    imgURL: './img/moños/moñom2.jpg',
    description: "Lorem Lorem Lorem",
    category: 'Mujer',
    id: 8
  },
  {
    title: "Amarillo",
    imgURL: './img/moños/moñom3.jpg',
    description: "Lorem Lorem Lorem",
    category: 'Mujer',
    id: 9
  }
]
//filter

function componentBow(bow){
  const {imgURL, title, description, id, category} = bow
  return `
    <div id="${id}" class="column bow accesorio">
      <img src="${imgURL}" alt="${category}">
        <label>${title}</label>
      <p>${description}</p>
    </div>
  `
}

function modalContentBowComponent(bow){
  return `
    <div id="id02">
    <a id="modal__exit" class="closebtn">×</a>
      <div> 
        <h2 class="title">${bow.title}</h2>
        <ul class="card-action-buttons">
          <li class="fav"><i onclick="myFavs(this)" class="fas fa-heart"></i></a></li>
          <li class="car"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
        <img class="principal" src="${bow.imgURL}" alt="${bow.title}">
          <br><br><br>
          <p class="desctext">${bow.description}</p>
          <div class="chips">
            <div style="width: 95%; margin: auto;">
                <div class="chip">${bow.title}</div>
                <div class="chip">${bow.category}</div>
        </div>
      </div>
    </div>
  `
}

function displayNotFound(){
  viewBow.innerHTML = `
  <div class="not-found">
    <p>Lo sentimos, aún tenemos moños en esa categoría...</p>
    <br><br>
    <span class="not-foundlogin">!!! Sé el primero en crearlo !!!</span><i class="fa fa-plus addbtn" onclick="document.getElementById('id01').style.display='block'"></i>
  </div>
  `
}

function displayBows(bowsArr){
  const bowsHTMl = bowsArr.map(bow => componentBow(bow)).join('');
  viewBow.innerHTML = bowsHTMl;
}

displayBows(bows);

document.addEventListener('click', (event)=>{
  const target = event.target
  if(target.closest('.bow')){  
    const selectedBow = target.closest('.bow')
    const myBow = bows.find(bow => Number(bow.id) === Number(selectedBow.id))
    const bowHTML = modalContentBowComponent(myBow);
    modalBow.innerHTML = bowHTML;
    modalBow.showModal();
  }
  if(target.closest('#modal__exit')){
    modalBow.close();
  }
  if(target.closest('.btn_ctg')){
    const btn = target.closest('.btn_ctg')
    const filterValue = btn.textContent;
    document.querySelector('#filterTag').textContent = btn.textContent;
    const filteredBows = filterValue === 'Todos' ? bows : bows.filter((bow)=> bow.category === filterValue)
    filteredBows.length !== 0 ? displayBows(filteredBows) : displayNotFound();
  }
})