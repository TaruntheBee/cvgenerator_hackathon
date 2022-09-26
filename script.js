function addNewwField(){
    let newNode = document.createElement('textarea')
    newNode.classList.add('form-control')
    newNode.classList.add('weField')
    newNode.classList.add('mt-2')
    newNode.setAttribute("rows",3)
    newNode.setAttribute("placeholder",'Enter here')

    let weOb = document.getElementById("we")
    let weAddButtonOb = document.getElementById("weAddButton")

    weOb.insertBefore(newNode,weAddButtonOb)
}


function addNewAQField(){
    let newNode = document.createElement('textarea')
    newNode.classList.add('form-control')
    newNode.classList.add('eqField')
    newNode.classList.add('mt-2')
    newNode.setAttribute("rows",3)
    newNode.setAttribute("placeholder",'Enter here')

    let aqOb = document.getElementById("aq")
    let aqAddButtonOb = document.getElementById("aqAddButton")

    aqOb.insertBefore(newNode, aqAddButtonOb)
}


function addNewSField(){
    let newNode = document.createElement('textarea')
    newNode.classList.add('form-control')
    newNode.classList.add('sField')
    newNode.classList.add('mt-2')
    newNode.setAttribute("rows",3)
    newNode.setAttribute("placeholder",'Enter here')

    let sOb = document.getElementById("sq")
    let sAddButtonOb = document.getElementById("sAddButton")

    sOb.insertBefore(newNode, sAddButtonOb)
}

// generate CV
function generateCV(){
    // console.log("hiiiiiiiiiiiiiiiiii")
    let nameField = document.getElementById('nameField').value;

    let nameT1= document.getElementById("nameT1");
 
    nameT1.innerHTML = nameField;

    //direct

    document.getElementById('nameT2').innerHTML = nameField;


    //CONTACT

    //  document.getElementById('contactT').innerHTML = document.getElementById("contactField").value;
    // let num = document.getElementById("contactField").value;
    // let str2 = num.toString();
    // str2.innerHTML= 
    


    //address
    document.getElementById('addressT').innerHTML = document.getElementById("addressField").value;

    //facebook
    document.getElementById('fbT').innerHTML = document.getElementById("fbField").value;

    //Insta
    document.getElementById('instaT').innerHTML = document.getElementById("instaField").value;

    //Linkedin
    document.getElementById('linkedT').innerHTML = document.getElementById("linkedField").value;

    //about
    document.getElementById('aboutT').innerHTML = document.getElementById("aboutField").value;

    //objective
    document.getElementById('objectiveT').innerHTML = document.getElementById("objectiveField").value;

    //we

    let wes = document.getElementsByClassName('weField')

    let str=' ';

    for(let e of wes){
        str += `<li> ${e.value} </li>`;
    }

    document.getElementById('weT').innerHTML= str;


    //aq
    let aqs = document.getElementsByClassName('eqField')

    let str1 =' ';
    for(let e of aqs){
        str1 += `<li> ${e.value} </li>`;
    }
    document.getElementById('aqT').innerHTML= str1;

    //sq
     let ss = document.getElementsByClassName('sField')

     let str2 =' ';
    for(let e of ss){
        str2 += `<li> ${e.value} </li>`;
    }

    document.getElementById('sT').innerHTML = str2;

    document.getElementById('cv-form').style.display ="none";
    document.getElementById('cv-template').style.display ="block";

}


function printCV(){
    window.print();
}