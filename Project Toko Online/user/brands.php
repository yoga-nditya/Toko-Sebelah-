<body>
	<style>
		:root{
	    --white-light: rgba(255, 255, 255, 0.5);
	    --alice-blue: #f8f9fa;
	    --carribean-green: #40c9a2;
	    --gray: #ededed;
		}

		/* Utility stylings */
		img{
		    width: 100%;
		    display: block;
		}
		.container{
		    width: 88vw;
		    margin: 0 auto;
		}

		.lg-title{
		    font-size: 2.5rem;
		    font-weight: 500;
		    text-align: center;
		    padding: 1.3rem 0;
		    opacity: 0.9;
		}

		/* product section */
		.products{
		    background: var(--alice-blue);
		    padding: 3.2rem 0;
		}

		.product{
		    margin: 1rem;
		    position: relative;
		}
		.product-content{
		    background: var(--gray);
		    padding: 0.5rem 0.5rem 0.5rem 0.5rem;
		    cursor: pointer;
		}
		.product-img{
		    background: var(--white-light);
		    box-shadow: 0 0 20px 10px var(--white-light);
		    width: 300px;
		    height: 150px;
		    margin: auto;
		    border-radius: 50%;
		    transition: background 0.5s ease;
		}

		.product-info{
		    background: white;
		    padding: 2rem;
		}

		.product-name{
		    color: black;
		    display: block;
		    text-decoration: none;
		    font-size: 1rem;
		    text-transform: uppercase;
		    font-weight: bold;
		}

		.product-img img{
		    transition: transform 0.6s ease;
		    margin: auto;
		}
		.product:hover .product-img img{
		    transform: scale(1.1);
		}

		/* product collection */
		.product-collection{
		    padding: 3.2rem 0;
		}
		.product-collection-wrapper{
		    padding: 3.2rem 0;
		}
		.product-col-left{
		    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-1.jpg") center/cover no-repeat;
		}
		.product-col-r-top{
		    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("images/fashion-img-2.png") center/cover no-repeat;
		}
		.flex{
		    display: flex;
		    justify-content: center;
		    align-items: flex-end;
		    height: 50vh;
		    padding: 2rem 1.5rem 3.2rem;
		    margin: 5px;
		}
		.product-col-r-bottom > div:first-child{
		    background: #eaa001;
		}
		.product-col-r-bottom > div:last-child{
		    background: #0090ff;
		}
		.product-col-content{
		    text-align: center;
		    color: white;
		}
		.product-collection .text-light{
		    opacity: 1;
		    font-size: 0.8;
		    font-weight: 400;
		    line-height: 1.7;
		}

		/* Media Queries */
		@media screen and (min-width: 992px){
		    .product-items{
		        display: grid;
		        grid-template-columns: repeat(2, 1fr);
		    }
		    .product-col-r-bottom{
		        display: grid;
		        grid-template-columns: repeat(2, 1fr);
		    }
		}
		@media screen and (min-width: 1200px){
		    .product-items{
		        grid-template-columns: repeat(3, 1fr);
		    }
		    .product{
		        margin-right: 1rem;
		        margin-left: 1rem;
		    }
		    .products .text-light{
		        width: 50%;
		    }
		}

		@media screen and (min-width: 1336px){
		    .product-items{
		        grid-template-columns: repeat(5, 1fr);
		    }
		    .product-collection-wrapper{
		        display: grid;
		        grid-template-columns: repeat(2, 1fr);
		    }
		    .flex{
		        height: 60vh;
		    }
		    .product-col-left{
		        height: 121.5vh;
		    }
		}
	</style>
	<div class = "products">
            <div class = "container">
                <h1 class = "lg-title">Brand</h1>
                <p class = "text-light">.</p>
                <div class = "product-items">
                	<?php
                	include 'conn.php';
					$conn = koneksi();
					
                	$sql = mysqli_query($conn,"SELECT * FROM brand ORDER BY nama_brand ASC");
					while($data = mysqli_fetch_array($sql)) {

                	?>
                    <!-- single product -->
                    <div class = "product">
                    	<a href = "index.php?page=brand&brand=<?php echo $data['nama_brand']?>" class = "product-name">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "asset/brand/<?php echo $data['nama_brand']?>.png" alt = "product-image">
                            </div>	
                        </div>

                        <div class = "product-info">
                        	<p class="product-name"><?php echo $data['nama_brand']?></p>
                            
                        </div>
                    </a>
                    </div>
                    <?php
                		}
                    ?>
                    
                </div>
            </div>
        </div>
</body>
</html>