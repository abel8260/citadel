
<?php session_start();
 ?>
<html>

	<head>
		<title>api-Citadel</title>
		<link rel="./css/style.css" type="text/css"/>
		<style>
			.main_source{
position:relative;
float: left;
width: 45vw;
border-style: solid;
border-color: black;
height: 65vh;
}
	.setor{
float: left;
position:relative;
border-style: solid;
border-color: black;
border-width: 1px;

}

.page_source{
float: left;
position:relative;

border-style: solid;
border-color: black;
border-width: 1px;

}
.typer{
float: left;
position:relative;

border-style: solid;
border-color: black;
border-width: 1px;

}
.imagem_header{
position:relative;
width: 45vw;
border-style: solid;
border-color: black;
border-width: 1px;
height: 89vh;
}
	.img1{
    
		position:relative;
		float: left;
		width: 45vw;	
		border-style: solid;
		border-color: black;
		border-width: 1px;
		height: 10vh;		
	}
	.img2{
    
		position:relative;
		float: left;
		width: 45vw;	
		border-style: solid;
		border-color: black;
		border-width: 1px;
		height: 78vh;		
	}
		
	.setor1{
position:relative;
width: 22vw;
border-style: solid;
border-color: black;
border-width: 1px;
height: 10vh;

background-size: 100% 100%;
}

.page_source1{
position:relative;
width: 22vw;
border-style: solid;
border-color: black;
border-width: 1px;
height: 10vh;

		background-size: 100% 100%;

}
.typer1{
position:relative;
width: 22vw;
border-style: solid;
border-color: black;
border-width: 1px;
height: 10vh;
background-image: url('../../img/type.png');
		background-size: 100% 100%;

}

	.img11{
    
		position:relative;
		width: 22vw;	
		border-style: solid;
		border-color: black;
		border-width: 1px;
		height: 10vh;	
		background-image: url('../../img/img.png');
		background-size: 100% 100%;
			
	}

	.search{
position:relative;
width: 45vw;
border-style: solid;
border-color: black;
border-width: 1px;
height: 10vh;
}

		.search0{
        float: left;
		position:relative;
		position:relative;
		width: 22vw;	
		border-style: solid;
		border-color: black;
		border-width: 1px;
		height: 10vh;
		background-image: url('../../img/search.png');
		background-size: 100% 100%;
		
	}
		.search1{
        float: left;
		position:relative;
		width: 45vw;	
		border-style: solid;
		border-color: black;
		border-width: 1px;
		height: 10vh;
		
		
	}
    input{
    	border: 2px solid black;
    }
    p{
    	padding:5px;
    }
body{
	padding:100px;
}
	</style>
	
	</head>

	<body>
        <form action='./db/get_data.php' method="GET">
        	<div class="search">
        		<div class="search0">
        			
        		</div>
        		<div class="search1">
        			<p>
        				<input type="text" name="gdata">
        			</p>
        		</div>
        		<input type="submit">
        	</div>
        </form>
        <br/>
        
        <br/>
        <br/>
	    
			<div class="main_source">
				<div class="setor">
					<div class="setor">
							<div class="setor1">
								<img src='../../img/setor.png' height='60vh' width= '300vw';/>
							</div>
							<div class="search1">
								<p><?php echo $_SESSION["nome"]; ?></p>
							</div>
		         	</div>
					
				</div>
				
				<div class="page_source">
					<div class="page_source">
							<div class="page_source1">
								<img src='../../img/pagina_src.png' height='60vh' width= '300vw';/>
							</div>
							<div class="search1">
								<p><?php echo $_SESSION["page_src"]; ?></p>
							</div>
		         	</div>
				</div>
				
				<div class="typer">
					<div class="typer1">
							<div class="typer1">
								<img src='../../img/type.png' height='60vh' width= '300vw';/>
							</div>
							<div class="search1">
								<p><?php echo $_SESSION["tipo"]; ?></p>
							</div>
				    </div>
				</div>    
				
			</div>
		
	</body>

</html>