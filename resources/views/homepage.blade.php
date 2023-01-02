<x-layout>
    <nav>
        <div class="logo">Cat App</div>
        <div id = "inputswrapper">
        <input id ="username"></input>
        <input id ="password"></input>
        <button id = "signinbutton">Sign In</button>
        </div>
        
        </nav>
        
        <body>
        <h1>Are you tired of Humans and their human related issues? </h1>
        
        
        <div id = "contactwrapper">
        
            <form id = "contactform" action ="/register" method="POST">
                @csrf
                <div id ="labelwrapper">
                <label> User Name</label><br>
                <input id = "name" type = "text" placeholder=" please enter your user name "></input><br>
                <label> Email</label><br>
                <input id = "name" type = "text" placeholder=" please enter your email "></input><br>
                <label>password</label><br>
                <input id = "name" type = "text" placeholder=" please create a password"></input><br>
                <label>confirm password</label><br>
                <input id ="messageinput" type = "text " name ="forminput " placeholder="please confirm your passowrd" required></input><br>
            
                <button id ="formcontact">Sign Up</button>
            </div>
            
            
            
        </form>
        
        
        
        
  

</x-layout>
