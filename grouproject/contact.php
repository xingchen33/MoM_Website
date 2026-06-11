:root {
  --scu-red: #A32035;
  --text-dark: #2c3e50;
  --bg-light: #f8f9fa;
}

h1{
    margin-top:1rem;
    color:white;
    margin-bottom:0;
}

#form{
    display: flex;
    align-items: center;
    flex-direction:column;
    height:70%;
    background-color:var(--scu-red);
    width:fit-content;
     margin: 0 auto;
    padding:0 4rem 2rem 4rem;
    margin-top:1rem;
    margin-bottom:1rem;
    border-radius:10px;
}

#form p{
    margin-top:0;
    color:white;
    margin-bottom:1.5rem;
}

form{
    display: flex;
    flex-direction:column;

}

input{
    margin-left:1rem;
    margin-right:1rem;
    border-radius: 10px;
    border:none;
}



#cap {
    display: inline-flex;
    align-items: center;
    gap:1rem;
    width:auto;
    
}

.h-captcha {
     width: 302px; 
     margin-top:1rem;

}

textarea{
    border-radius: 10px;
    border-color:none;
    margin-bottom:1rem;

}

label{
    color:white;
     font-size:1.5rem;
     font-style:bold;
     margin-bottom:0.5rem;
}

#short{
    display:flex;
    flex-direction:row;
    margin-bottom:0.5rem;
}

#short input{
    width: 15rem; 
}

#message{
    height:12rem;
}

.internal{
    height:5rem;
    font-size:1.5rem;


}

.h-captcha{
    margin-bottom:1rem;
}

form input[type="text"]{
    font-size:1.5rem !important;
}

#short input {
    font-size: 1.5rem;
    width: 15rem;
}

textarea {
    font-size: 1.5rem;
}

#content{
    display:flex;
    background-image:url('../img/contact_background.jpg');
    margin-top:0;
    background-size:cover;
    background-position-y:-20rem;
    background-repeat: no-repeat; 
    
}
