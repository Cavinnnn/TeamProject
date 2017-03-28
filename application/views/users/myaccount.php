<style>
    
    *, *:before, *:after {
  box-sizing: border-box;
}

body {
  font-family: "Montserrat", sans-serif;
}

h1 {
  color: #FFF;
  font-size: 70px;
  text-align: center;
  line-height: 200px;
}

.container {
  margin: 5px auto; 
  max-width: 95%;

}

.sidebar {
  display: inline-block;
  width: 25%;
  border-radius: 3px;
  overflow: hidden;
}

.sidebar i {
  margin-right: 15px;
}

.sidebar__header {
  vertical-align: top;
  background: #DFDFDF;
  padding: 20px;
  border-bottom: 1px solid #F0F1F2;
}
.sidebar__header img.sidebar__avatar {
  float: left;
  border-radius: 50%;
  margin-right: 10px;
}
.sidebar__header p {
  line-height: 3em;
  margin: 0;
}

.sidebar__menu-item {
  background: #FFF;
  padding: 20px;
  color: #AFAFAF;
  border-bottom: 1px solid #F0F1F2;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.sidebar__menu-item--active {
  color: #000;
  border-left: 3px solid #348AA7;
}
.sidebar__menu-item:hover {
  background: #f7f7f7;
  cursor: pointer;
}

.sidebar__badge {
  text-align: center;
  float: right;
  font-size: 70%;
  line-height: 1.8em;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  color: #FFF;
  background: #8ED081;
}

.main__avatar {
  background: url("https://teamproject-cavinn.c9users.io/backend-assets/img/avatar.png" );
  background-size: cover;
  width: 150px;
  height: 150px;
  display: block;
  vertical-align: middle;
  margin: 20px auto;
  border-radius: 50%;
  overflow: hidden;
}

.main__avatar:hover .main__avatar--overlay {
  opacity: 1;
  border-radius: 50%;
}
/*#595959, .6;*/
.main__avatar--overlay {
  opacity: 0;
  background: rgba(116, 116, 124, 0.6);
  color: #FFF;
  text-align: center;
  line-height: 150px;
  border-radius: 50%;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  cursor: pointer;
}

.main__settings-form {
  max-width: 80%;
  display: block;
  margin: 0 auto;
}

.main__input-label {
  font-size: 80%;
  color: #C4C1C9;
  display: block;
  margin: 5px 5px 5px 5px;
}

.main__input {
  display: inline-block;
  width: 100%;
  border: 1px solid #F1F3F5;
  margin-bottom: 20px;
  outline: none;
  padding: 15px;
  border-radius: 3px;
  color: #000;
  font-family: "Montserrat", sans-serif;
}
.main__input:focus {
  border: 1px solid #348AA7;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.btn {
  margin-bottom: 20px;
  font-family: "Montserrat", sans-serif;
  border: none;
  outline: none;
  padding: 15px 25px;
  border-radius: 3px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

.main__save-button {
  color: #FFF;
  background-color: ##3F3F3F;
}
.main__save-button:hover {
  background-color: #67818A;
  cursor: pointer;
}

.main__cancel-button {
  color: #FFF;
  background: #CCC;
}
.main__cancel-button:hover {
  background-color: #b3b3b3;
  cursor: pointer;
}


@media (max-width: 764px) {
  .sidebar {
    width: 100%;
    margin-bottom: 20px;
  }

  .sidebar__menu-item {
    padding: 15px;
  }

  .main {
    width: 100%;
    margin: 0;
  }

  h1 {
    font-size: 44px;
  }

}

</style>
        
    
<div class='container'>
  <div class='sidebar'>
    <div class='sidebar__header'>
      <img alt='profilepic' class='sidebar__avatar' src="https://teamproject-cavinn.c9users.io/backend-assets/img/avatar.png" height="48" width="48">
      <p>Hi Ralf!</p>
    </div>
    <div class='sidebar__menu-item'>
      <i class='a'></i>
      Settings
     
    </div>
    <div class='sidebar__menu-item'>
      <i class='b'></i>
      Likes
    </div>
    <div class='sidebar__menu-item sidebar__menu-item'>
      <i class='c'></i>
      Library
    </div>
    <div class='sidebar__menu-item'>
      <i class='d'></i>
      Friends
    </div>
<br>
  </div>
  <div class='main'>
    <div class='main__header'>
      <h2>My Account</h2>
    </div>
    <div class='main__content'>
      <div class='main__avatar'>
        <div class='main__avatar--overlay'>
          Ralf245
        </div>
      </div>
      <div class='main__settings-form'>
        <h3>Change details</h3> 
        <form action='#' method='post'>
          <label class='main__input-label'>Your name:</label>
          <input class='main__input' placeholder='enter your name' type='text'>
          <label class='main__input-label'>Your e-mail:</label>
          <input class='main__input' placeholder='name@email.com' type='text'>
        </form>
        
        <button class='btn main__save-button'>Save</button>
        <button class='btn main__cancel-button'>Cancel</button>
      </div>
    </div>
  </div>
</div>