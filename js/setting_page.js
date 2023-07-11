const editprofile=document.getElementById('companyProfile');
const employerUser=document.getElementById('addUser');
const employerAccount=document.getElementById('userPassword');
const employerActivity=document.getElementById('activityTable');
//setting---------------------------------------------
const userTable=document.getElementById('userTable');
const adduser=document.getElementById('add');
const userupdate=document.getElementById('update');
//----------------------------------------------------

function editProfile(){
   editprofile.style.display="block";
   employerUser.style.display="none";
   employerAccount.style.display="none";
   employerActivity.style.display="none";
}
//Add User-----------------------------------
function addUser(){
    editprofile.style.display="none";
    employerUser.style.display="block";
    employerAccount.style.display="none";
    employerActivity.style.display="none";
 }

 function userAdd(){
   userTable.style.display="none";
   adduser.style.display="block";
 }

 function userUpdate(){
   userTable.style.display="none";
   userupdate.style.display="block";
 }

 function back(){
   userTable.style.display="block";
   adduser.style.display="none";
   userupdate.style.display="none";
 }

 //------------------------------------------

function userpassword(){
  editprofile.style.display="none";
  employerUser.style.display="none";
  employerAccount.style.display="block";
  employerActivity.style.display="none";
}

function activityLog(){
  editprofile.style.display="none";
  employerUser.style.display="none";
  employerAccount.style.display="none";
  employerActivity.style.display="block";
}