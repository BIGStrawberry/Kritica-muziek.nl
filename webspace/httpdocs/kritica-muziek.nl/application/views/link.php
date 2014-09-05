<div class="element">
    <a class="dropdown-toggle" href="#">KRITICA-MUZIEK</a>
    <ul class="dropdown-menu" data-role="dropdown">
        <li><a href="#">Main</a></li>
        <li><a href="#">File Open</a></li>
        <li class="divider"></li>
        <li><a href="#">Print...</a></li>
        <li class="divider"></li>
        <li><a href="#">Exit</a></li>
    </ul>
</div>

<span class="element-divider"></span>
<a class="element brand" href="#"><span class="icon-spin"></span></a>
<a class="element brand" href="#"><span class="icon-printer"></span></a>
<span class="element-divider"></span>

<div class="element input-element">
    <form>
        <div class="input-control text">
            <input type="text" placeholder="Search...">
            <button class="btn-search"></button>
        </div>
    </form>
</div>

<div class="element place-right">
    <a class="dropdown-toggle" href="#">
        <span class="icon-cog"></span>
    </a>
    <ul class="dropdown-menu place-right" data-role="dropdown">
        <li><a href="#">Products</a></li>
        <li><a href="#">Download</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#">Buy Now</a></li>
    </ul>
</div>
<span class="element-divider place-right"></span>
<a class="element place-right" href="#"><span class="icon-locked-2"></span></a>
<span class="element-divider place-right"></span>
<button id="loginWindow" class="element image-button image-left place-right">
    Login
</button>
<script>
	$("#loginWindow").on('click', function(){
	    $.Dialog({
	        shadow: true,
	        overlay: false,
	        icon: '<span class="icon-rocket"></span>',
	        title: 'Title',
	        content: '',
	        width: 500,
	        padding: 10,
	        onShow: function(_dialog){
	            var content = '<form name="login" action="<?php echo BASE_URL; ?>guests/login" method="POST">' +
	                '<label>Login</label>' +
	                '<div class="input-control text"><input type="text" name="username"><button class="btn-clear"></button></div>' +
	                '<label>Password</label>' +
	                '<div class="input-control password"><input type="password" name="password"><button class="btn-reveal"></button></div>' +
	                '<div class="form-actions">' +
	                '<button class="button primary" type="submit">Login</button>'+
	                '<button id="registerWindow" class="button" type="button">Register</button>'+
	                '<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button>'+
	                '</div>'+
	                '</form>';
	 
	            $.Dialog.title("User login");
	            $.Dialog.content(content);
	            $.Metro.initInputs();
	        }
	    });
	});
/*	$("#loginWindow").on('click', '#registerWindow', function(){
	    $.Dialog({
	    	function(_dialog){
		    	var content = '<form name="register" action="<?php echo BASE_URL; ?>guests/register" method="POST">' +
	                '<label>Register</label>' +
	                '<div class="input-control text"><input type="text" name="username"><button class="btn-clear"></button></div>' +
	                '<label>Password</label>' +
	                '<div class="input-control password"><input type="password" name="password"><button class="btn-reveal"></button></div>' +
	                '<div class="form-actions">' +
	                '<button class="button primary" type="submit">Submit</button>'+
	                '<button class="button" type="button" onclick="$.Dialog.close()">Cancel</button>'+
	                '</div>'+
	                '</form>';
		        $.Dialog.content(content);
		        $.Metro.initInputs();
	        }
	    });
	});*/
</script>