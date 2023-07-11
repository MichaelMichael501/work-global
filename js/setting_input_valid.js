const firstPage = document.getElementById("companyOverview");
const secondPage = document.getElementById("otherInfo");
const thirdPage = document.getElementById("companyPhoto");
const nextBtn = document.getElementById("nextbtn");
const prevBtn = document.getElementById("prevbtn");
var checkPage=0;

function nextpage(){
    if(checkPage==0)
    {
        checkPage=1;
        firstPage.style.display="none";
        secondPage.style.display="block";
        prevBtn.style.display="block";
    }

    else if(checkPage==1)
    {
        checkPage=2
        secondPage.style.display="none";
        thirdPage.style.display="block";
        nextBtn.style.display="none";
        
    }
}

function prevpage(){
    if(checkPage==1)
    {
        checkPage=0;
        firstPage.style.display="block";
        secondPage.style.display="none";
        prevBtn.style.display="none";
    }

    else if(checkPage==2)
    {
        checkPage=1;
        secondPage.style.display="block";
        thirdPage.style.display="none";
        nextBtn.style.display="block";
    }
}