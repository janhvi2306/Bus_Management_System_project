<style>
    body, html{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    scroll-behavior: smooth;
    }

    *, *::after, *::before{
        box-sizing: inherit;
    }
    .link-light{
        text-decoration: none;
    }

    .searchQuery{
        position: relative;
    }

    .sugg{
        position: absolute;
        width: 100%;
        z-index: 1;
        background-color: white;
        max-height: 179px;
        overflow: auto;
    }

    .sugg li{
        list-style-type: none;
        padding: 0;
        text-align: left;
        padding: 0.3rem;
        text-transform: capitalize;
        border-style: solid; 
        border-color: black;
        border-width: 0 2px 2px 2px;
        border-radius: 5px;
    }

    .sugg li:hover{
        background-color: #efefef;
        cursor: pointer;
    }

     

    .hl{
        background-color: #ddbea9;
    }


    /* Overriding Bootstrap */
    nav a:hover{
        color: black;
    }
    nav{
        text-align: center;
        padding: 1.5rem 0;
    }

    nav div, nav ul{
        margin-top: 1rem;
    }

    nav div:first-child{
        margin-top: 0;
    }

    nav > div a{
        display: block;
    }

    nav ul{
        list-style-type: none;
        padding: 20px;
      
    }

    nav a{
        padding-bottom: 0.2rem;
        text-decoration: none;
        font-size:18px ;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
    }

  nav ul ul{
    position: absolute;
    top: 19px;
    margin-top: 9px;
    margin-left: -15px;
    display: block;
    opacity: 0;
    visibility: hidden;
  }
  nav ul li:hover > ul{
    top: 70px;
    opacity: 1;
    transition: .3s linear;
  }
  nav ul li ul li{
    width: 184px;
    display: block;
    position: relative;
    border-top: white;
    visibility: visible;
    background: white;
    text-align: left;
    padding: 10px;
    cursor:pointer;
  }
  nav ul li ul li a:hover{
    color: orange;
    text-decoration: none;
  }
  
  nav ul li ul li a{
      font-size:15px;
      font-weight: 600;
  }
  

    .nav-logo{
        color: #207DFF;
    letter-spacing: 2px;
    transition: none;
    font-size: 34px;
}

.footer{
    background: #fff;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    font-size: 1.7rem;
    color:#444;
    padding:1rem 0;
    text-transform: capitalize;
    font-weight: bolder;
}

.footer .box-container .box a{
    display: block;
    font-size: 1.2rem;
    color:#666;
    padding:1rem 0;
    text-decoration: none;
    text-transform: capitalize;

}

.footer .box-container .box a i{
    padding-right: .5rem;
    color:#F79F1F;
}

.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .credit{
    font-size: 2rem;
    text-align: center;
    border-top: .1rem solid #666;
    padding:1rem;
    padding-top: 2rem;
    margin-top: 2rem;
    color:#666;
}

.footer .credit span{
    color:#F79F1F;
}
@media screen and (min-width: 768px) {
    section {
      padding: 1em 7em;
    }
  }
  @media screen and (min-width: 992px) {
    section {
      padding: 1em;
    }
    .card {
      padding: 5em 2em;
    }
    .column {
      flex: 0 0 34%;
      max-width: 33.33%;
      padding: 0 1em;
    }
  }

    /* Alert Message on top of the header */
    .alert{
        z-index: 3;
        border-radius: 0px;
    }


    #home{
        height: 70vh;
        background-image: url("assets/img/sbtbsimg.png");
        background-size: cover;
        background-position: 0% 65%;;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #route-search-form{
        width: 50%;
        padding: 1rem 0.5rem;
        color: black;
        position: relative;
        z-index: 1;
    }

    #route-search-form::before{
        content: "";
        position: absolute;
        top: 25%;
        left: 0%;
        height: 100%;
        width: 100%;
        background-color: white;
        z-index: -1;
        opacity: 0.6;
    }


    #route-search-form h1{
        margin-top: 0;
        text-align: center;
        color: black;
    }

    form{
        padding: 0 0.5rem;
        font-weight: bold;
    }

    #route-search-form > div{
        margin: 1rem 0;
    }

    form input, form textarea{
        border: 2px solid black;
        outline: none;
        width: 100%;
        font-size: inherit;
        border-radius: 5px;
        padding-left: 0.3rem;
    }


    #route-search-form form input{
        margin-top: 0.8rem;
    }


    #route-search-form form div:last-child{
        text-align: center;
    }

    form button{ 
        border:2px solid;
        padding: 0.3rem 0.7rem;
        font-weight: bolder;
        background-color: transparent;
        transition: background 800ms, color 800ms;
        border-radius: 4px;
    }

    form button:hover{
        background-color: #fff;
        color: #201E22;
        cursor: pointer;
    }

    #info-num{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    #info-num figure{
        flex-basis: 30%;
        padding: 2rem 0;
        text-align: center;
        border-radius: 5px;
    }

    #info-num figcaption{
        margin-top: 1rem;
        text-transform: uppercase;
    }

    #info-num .num{
        display: block;
        margin-bottom: 0.3rem;
        font-size: 1.2rem;
        font-weight: 800;
    }

    #pnr-enquiry{
        height: 80vh;
        background-image: url("assets/img/buscv.jpg");
        background-size: cover;
        background-position: 50% 50%;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    #pnr-form{
        padding: 4rem 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        position: relative;
        z-index: 1;
    }

    #pnr-form form{
        width: 70%;
    }

    #pnr-form input{
        width: 100%;
    }

    #pnr-form::before{
        content: "";
        position: absolute;
        height: 100%;
        width: 100%;
        right: 0%;
        background-color: black;
        border-radius: 10px;
        z-index: -1;
        opacity: 0.5;
    }

    #pnr-form div{
        margin: 1rem auto;
        width: 90%;
    }

    #pnr-form button{
        font-weight: bold;
        font-size: 14px;
        padding: 0.3rem 0.7rem;
        text-transform: uppercase;
        border: 3px solid;
        border-radius: 5px;
        color: #212529;
        background-color: #CCD3DD;
        transition: background-color 400ms;
    }

    #pnr-form button:hover{
        background-color: #ebecee;
        cursor: pointer;
    }


    .pnr-details{
        list-style-type: none;
        padding: 0;
    }

    .nav-scroll{
        position: fixed;
        background-color: white;
    }

    /* Tablet */
    @media only screen and (min-width: 784px){
        

        header{
            position: absolute;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.4);
            display: block;
            top: 0;
            width: 100%;
            z-index: 2;
            transition: background-color 500ms;
        }
        nav{
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin: 0 auto;
            padding: 0.5rem;
        }

        nav > div{
            display: flex;
            align-items: center;
            flex-grow: 1;
            justify-content: center;
        }

        nav ul{
            display: flex;
            flex-grow: 1;
            justify-content: center;
        }

        nav div, nav ul{
            margin-top: 0;
        }
        
        nav a{
            border-bottom: 2px solid transparent;
            margin: 0 1rem;
            transition: border-color 800ms;
            border-radius: 2px;
        }

        nav a:not(.nav-logo):hover{
            border-color: black;
            text-decoration: none;
        }

        #home{
            height: 100vh;
            background-position: 40% 65%;
            background-attachment: fixed;
            display: block;
        }

            
        #route-search-form{
            position: absolute;
            top: 28%;
            right: 10%;
            width: 20rem;
            padding: 1rem 2rem;
        }


        #route-search-form h1{
            margin-top: 0;
            text-align: center;
        }

        form{
            padding: 0 0.5rem;
            font-weight: bold;
        }

        #route-search-form form > div{
            margin: 1rem 0;
        }

        #block{
            width: 100%;
        }


    }


    /* Desktops */
    @media only screen and (min-width: 992px){
        /* Alert Message on top of the header */
        .alert{
            position: absolute;
           width: 100%;
            z-index: 3;
            border-radius: 0px;
        }

        .alert-dark{
            width: 50%;
            left: 50%;
            transform: translateX(-50%);
            border-radius:20px;
        }

        nav{
            width: 80%;
        }

        #home{
            background-position: 60% 65%;
        }


        #route-search-form{
            position: absolute;
            top: 14%;
            right: 15%;
            width: 60rem;
            padding: 2.5rem 2rem;
        }

        #block{
            width: 90%;
            margin: 0 auto;
        }

        #info-num figure{
            flex-basis: 15%;
        }

        #pnr-enquiry{
            height: 50vh;
        }

        #pnr-form{
            width: 50%;
        }

    }
</style>