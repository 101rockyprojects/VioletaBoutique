const modalBow = document.querySelector('#modal')
const viewBow =  document.querySelector('#container')
const bows = [
  {
    title: "Hombre",
    imgURl: './img/moños/moñoh.jpg',
    description: "Lorem Lorem Lorem",
    category: 'Infantiles',
    id: 1
  },
  {
    title: "Hombre",
    imgURl: './img/moños/moñoh.jpg',
    description: "Lorem Lorem Lorem",
    category: 'infantiles',
    id: 2
  },
  {
    title: "Hombre",
    imgURl: './img/moños/moñoh.jpg',
    description: "Lorem Lorem Lorem",
    category: 'mujer',
    id: 3
  },
  {
    title: "Hombre",
    imgURl: './img/moños/moñoh.jpg',
    description: "Lorem Lorem Lorem",
    id: 4
  },
  {
    title: "Hombre",
    imgURl: './img/moños/moñoh.jpg',
    description: "Lorem Lorem Lorem",
    id: 5
  },
  {
    title: "Hombre",
    imgURl: './img/moños/moñoh.jpg',
    description: "Lorem Lorem Lorem",
    id: 6
  }
]
//filter

function componentBow(bow){
  const {imgURl, title, description, id} = bow
  return `
  <div id="${id}" class="bow accesorio">
    <img src="${imgURl}" alt="Hombre">
      <label>${title}</label>
    <p>${description}</p>
  </div>
  `
}

function modalContentBowComponent(bow){
  return `
    <h2>${bow.title}</h2>
    <button id="modal__exit">Exit</button>
  `
}

function displayNotFound(){
  viewBow.innerHTML = `
    <div class="not-found">
      <h2>no se ha encontrado moños en esa categoria</h2>
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