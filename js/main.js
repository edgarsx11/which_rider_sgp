document.addEventListener("contextmenu", function (e){
    e.preventDefault();
}, false);

function search (name) {
    fetchSearchData(name);
}

function fetchSearchData(name) {
    fetch('search.php', {
        method: 'POST',
        body: new URLSearchParams('name=' + name)
    })
    .then(res => res.json())
    .then(res => viewSearchResult(res))
    .catch(e => console.error('Error: ' + e))
}


function viewSearchResult (dataRows) {
    const dataViewer = document.getElementById("dataViewer");
    dataViewer.innerHTML = "";
    const searchBox = document.getElementsByName("name")[0];
    if(searchBox.value == '')
    dataViewer.style.display = 'none';
    else
    dataViewer.style.display = '';

    for (let i = 0; i<5; i++){
        const image = document.createElement("img");
        const btn = document.createElement("button");
        const div = document.createElement("div");
     
        const name = dataRows[i]["name"];
        const surname = dataRows[i]["surname"];
        const number = dataRows[i]["number"];

        image.setAttribute('src', dataRows[i]['nationality']);
        btn.setAttribute('value', number);
        btn.setAttribute('onclick', 'chooseRider(this);   dataViewer.innerHTML = ""; ');
        btn.setAttribute('id', 'button');
        btn.setAttribute('class', 'riderButton');
        div.setAttribute('class','rider');

        btn.innerHTML = name.concat(" ", surname);
        div.appendChild(image);
        div.appendChild(btn); 
        dataViewer.appendChild(div);

        dataViewer.style.backgroundColor = 'white';
    }
   
}

let counter = 1;
let realCounter = 0;
function chooseRider(e) {
    counter++;
    realCounter++;

    const dataViewer = document.getElementById("displayAttributes");
    const attributes = document.getElementById("attributes");

    const block = document.getElementById("block");
    const searchBox = document.getElementsByName("name")[0];
    searchBox.value = "";
    searchBox.placeholder = 'GUESS '.concat(counter, ' OF 4');
    attributes.style.display = 'flex';

	let guessedRider = e.value;
    let riderNumberStr = document.getElementsByName("name")[0].id;
    let riderNumber = parseInt(riderNumberStr)-999;
    const qMarkBlock = document.getElementById('qmark');
    
	// jQuery Ajax Post Request
	$.post('logic.php', {
		guessedRider: guessedRider,
        riderNumber: riderNumber
	}, (response) => {
		// response from PHP back-end
        const riderData = document.createElement("div");
        riderData.innerHTML = response;
        dataViewer.appendChild(riderData);
        
	
});

if(guessedRider == riderNumber){
    const dataViewer = document.getElementById("dataViewer");
    dataViewer.innerHTML = "";
    searchBox.disabled = true;
    searchBox.placeholder = '';
    qMarkBlock.style.display = 'none';
    searchBox.style.display = 'none';
    const info = document.createElement("div");
    const counterInfo = document.createElement("div");
    const riderName = document.createElement("div");
    const btn = document.createElement("button");
    btn.textContent = 'PLAY AGAIN';
    btn.setAttribute('class', 'restartButton');
    btn.setAttribute('onclick', 'location.reload();');
    info.textContent = 'CONGRATULATIONS! YOU GUESSED!';
    counterInfo.textContent = 'IT TOOK YOU '.concat(realCounter, ' ATTEMPTS TO CONCLUDE');
    riderName.textContent = 'IT WAS '.concat(data);
    info.setAttribute('class', 'finalText');
    counterInfo.setAttribute('class', 'finalText');
    info.style.fontSize = '19px';
    counterInfo.style.fontSize = '22px';
    counterInfo.style.fontWeight = '600';
    riderName.style.fontSize = '22px';
    riderName.style.fontWeight = '600';
    riderName.style.textTransform = 'uppercase';
    block.style.textAlign = 'center';
    block.appendChild(info);
    block.appendChild(counterInfo);
    block.appendChild(riderName);
    block.appendChild(btn);
}
else if(counter >= 5){
    const dataViewer = document.getElementById("dataViewer");
    dataViewer.innerHTML = "";
    searchBox.disabled = true;
    searchBox.placeholder = '';
    qMarkBlock.style.display = 'none';
    searchBox.style.display = 'none';
    const info = document.createElement("div");
    const riderName = document.createElement("div");
    const btn = document.createElement("button");
    btn.textContent = 'PLAY AGAIN';
    btn.setAttribute('class', 'restartButton');
    btn.setAttribute('onclick', 'location.reload();');
    info.textContent = 'YOU DID NOT GUESS!';
    riderName.textContent = 'IT WAS '.concat(data);
    info.setAttribute('class', 'finalText');
    riderName.setAttribute('class', 'finalText');
    info.style.fontSize = '22px';
    riderName.style.fontSize = '24px';
    riderName.style.textTransform = 'uppercase';
    riderName.style.fontWeight = '600';
    block.style.height = '220px';
    block.appendChild(info);
    block.appendChild(riderName);
    block.appendChild(btn);   
}
}
function closePopUp() {
    const rules = document.getElementById('rules');
    rules.style.display = 'none';
    document.body.style.backgroundImage = 'linear-gradient(0deg,rgba(130, 123, 111, 0.5),#a3a5a8), url("https://marvel-b1-cdn.bc0a.com/f00000000104050/www.monsterenergy.com/media/uploads_image/2022/09/19/1600/800/a7b449a69bb635c8ecb61535afc674bf.jpg?mod=v1_b839cb43fcab0250b382461ac588ad80")';
}