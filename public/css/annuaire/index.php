<style>
    /* Accueil Annuaire Styling */
    .annuaire{
        width: 100%;
        height: 500px;
        background: radial-gradient(#FFFFFF00, #00000080) ,url("<?php echo WEB_ROOT."media/bg_logos/assets/search-box-bg.jpg"?>") no-repeat center center / cover;
        background-attachment: fixed;
    }
    .annuaire .max-width{
        width: 95%;
        height: 100%;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    .annuaire .max-width .search-box{
        width: 70%;
        height: 100px;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 50px;
    }
    .annuaire .max-width .search-box .max-width form{
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .annuaire .max-width h3{
        font-weight: 300;
        font-size: 18px;
        color: #fff;
        position: absolute;
        bottom: 0;
    }
    .annuaire .max-width .search-box .max-width form .what-box,
    .annuaire .max-width .search-box .max-width form .where-box{
        background-color: #fff;
        width: 55%;
        height: 60px;
        border-radius: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
    .annuaire .max-width .search-box .max-width form .where-box{
        width: 35%;
        justify-content: space-around;
    }
    input{
        outline: none;
        border: none;
        appearance: none;
        -webkit-appearance: none;
        -ms-appearance: none;
        -moz-appearance: none;
        height: 90%;
        width: 85%;
        font-weight: 500;
        font-size: 20px;
    }
    .where-box input{
        width: 60%;
    }
    .where-box #submit{
        width: 20%;
        cursor: pointer;
        background-color: #EAB637;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: rgb(38, 57, 77) 15px 15px 15px -10px;
    }
    /* Autocompletion Box Styling */
    .list-group{
        width: 100%;
        height: 80px;
        background-color: #2ECC71;
    }
    /* Banners Section Styling */
    .banners .pub-slider div a img{
        width: 80%;
        padding: 20px;
        margin: 0 auto;
    }


    /* Entreprises-a-la-une Styling */
    .section-enterprises-a-la-une{
        width: 100%;
        height: 700px;
        background: #EDF0F2;
    }
    .section-enterprises-a-la-une .title{
        position: relative;
        text-align: center;
        font-size: 40px;
        font-weight: 600;
        padding-top: 50px;
        padding-bottom: 20px;
    }
    .section-enterprises-a-la-une .title::before{
        content:"";
        position: absolute;
        bottom: 15px;
        left: 50%;
        width: 180px;
        height: 6px;
        background: #EAB637;
        transform: translateX(-50%);
        z-index: 5;
    }
    .section-enterprises-a-la-une .title::after{
        content: "a la une";
        z-index: 10;
        position: absolute;
        bottom: 0px;
        padding: 0 10px;
        left: 50%;
        font-size: 20px;
        color: #000;
        font-weight: 700;
        background: #EDF0F2;
        transform: translateX(-50%);
    }
    .section-enterprises-a-la-une .block-enterprises{
        display: flex;
        position: relative;
        margin-top: 50px;
    }
    .section-enterprises-a-la-une .block-enterprises .entreprises-container{
        width: 100%;
        margin-top: 50px;
        height: 200px;
    }

    .section-enterprises-a-la-une .block-enterprises .entreprises-container{
        width: 95%;
        margin: 0 auto;
    }

    .section-enterprises-a-la-une .block-enterprises .entreprises-container .card-entr{
        background: #fff;
        margin: 0 20px;
        max-width: 200px;
        min-width: 200px;
        min-height: 150px;
        border-radius: 10px;
    }
    .section-enterprises-a-la-une .block-enterprises .entreprises-container .card-entr .max-width{
        width: 95%;
        height: 100%;
        margin: 0 auto;
        text-align: center;
        display: flex;
        flex-direction: column;
    }
    .section-enterprises-a-la-une .block-enterprises .entreprises-container .card-entr .max-width img{
        margin: 0 auto;
    }
    .section-enterprises-a-la-une .block-enterprises .entreprises-container .card-entr .max-width p{
        font-size: 15px;
    }

    .section-enterprises-a-la-une .block-enterprises .entreprises-container .slick-track{
        background-color: #FFFFFF80;
        padding: 30px 0 20px;
    }
    .section-enterprises-a-la-une .block-enterprises .fa-arrow-circle-left,
    .section-enterprises-a-la-une .block-enterprises .fa-arrow-circle-right{
        position: absolute;
        top: 80%;
        z-index: 3;
        cursor: pointer;
    }
    .section-enterprises-a-la-une .block-enterprises .fa-arrow-circle-left{
        left: 20px;
    }
    .section-enterprises-a-la-une .block-enterprises .fa-arrow-circle-right{
        right: 20px;
    }
    .slick-slide div{
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        width: 90%;
        margin: 0 50px 20px;
    }
    
    /* Join Section Styling */
    .section-join{
        height: 500px;
        width: 100%;
        display: flex;
        background: url("../../media/bg_logos/assets/join-left-bg.jpg") no-repeat center center;
        background-size: cover;
    }
    .section-join .part{
        width: 50%;
        height: 100%;
    }
    .section-join .right{
        display: flex;
        align-items: center;
        justify-self: center;
    }
    .section-join .right .max-width{
        width: 90%;
        height: 90%;
        background-color:#FFFFFF80;
        filter: blur(0.5);
        border-radius: 5px;
    }
    .section-join .right .max-width{
        text-align: center;
    }
    
    /* Section Discover Styling */
    .section-discover{
        height: 900px;
        width: 100%;
        background: #EDF0F2;
    }
    .section-discover .max-width{
        width: 80%;
        margin: 0 auto;
    }
    .section-discover .max-width .title{
        position: relative;
        text-align: center;
        font-size: 40px;
        font-weight: 600;
        padding-top: 50px;
        padding-bottom: 20px;

    }
    .section-discover .max-width .title::before{
        content:"";
        position: absolute;
        bottom: 15px;
        left: 50%;
        width: 180px;
        height: 6px;
        background: #EAB637;
        transform: translateX(-50%);
        z-index: 5;
    }
    .section-discover .max-width .title::after{
        content: "Dakar";
        z-index: 10;
        position: absolute;
        bottom: 0px;
        padding: 0 10px;
        left: 50%;
        font-size: 20px;
        color: #000;
        font-weight: 700;
        background: #EDF0F2;
        transform: translateX(-50%);
    }
    .section-discover .max-width .cards{
        margin-top: 50px;
        display: grid; 
        grid-template-columns: 1fr 1fr 1fr 1fr; 
        grid-template-rows: 1fr 1fr; 
        gap: 40px 35px; 
        grid-template-areas: 
            "health car food hotel"
            "pro pro pro food"; 
    }
    .section-discover .max-width .cards a .health{
        grid-area: "health";
        background-color: #2ECC71;
        transition: all 0.5s ease;
    }
    .section-discover .max-width .cards .health:hover{
        background:linear-gradient(#00000190, #00000190), url("../../media/bg_logos/assets/health-bg.jpg") center center no-repeat;
        background-size: cover;
    }
    .section-discover .max-width .cards a .car{
        grid-area: "car";
        background-color: #F39C12;
    }
    .section-discover .max-width .cards .car:hover{
        background:linear-gradient(#00000190, #00000190), url("../../media/bg_logos/assets/car-bg.jpg") center center no-repeat;
        background-size: cover; 
    }
    .section-discover .max-width .cards a .food{
        grid-area: "food";
        background-color: #E74C3C;
    }
    .section-discover .max-width .cards .food:hover{
        background:linear-gradient(#00000190, #00000190), url("../../media/bg_logos/assets/resto-bg.jpg") center center no-repeat;
        background-size: cover; 
    }
    .section-discover .max-width .cards a .hotel{
        grid-area: "hotel";
        background-color: #9B59B6;
    }
    .section-discover .max-width .cards .hotel:hover{
        background:linear-gradient(#00000190, #00000190), url("../../media/bg_logos/assets/hotel-bg.jpg") center center no-repeat;
        background-size: cover; 
    }
    .section-discover .max-width .cards a .pro{
        background-color: #16A085;
    }
    .section-discover .max-width .cards .proa{
        grid-area: "pro";
        grid-column: 1/ span 4;
    }
    .section-discover .max-width .cards .pro:hover{
        background:linear-gradient(#00000190, #00000190), url("../../media/bg_logos/assets/pro-bg.jpg") center center no-repeat;
        background-size: contain; 
    }
    .section-discover .max-width .cards a .pro .max-width .top p{
        margin-top: 20px;
        width: 50%;
    }
    .section-discover .max-width .card{
        color: #fff;
        height: 250px;
        border-radius: 25px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        transition: all ease 0.3s;
    }
    .section-discover .max-width .card:hover{
        margin-top: -10px;
    }
    .section-discover .max-width a{
        text-decoration: none;
    }
    .section-discover .max-width .card .max-width{
        width: 80%;
        height: 90%;
        padding-top: 20px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .section-discover .max-width a .pro .max-width{
        width: 95%;
    }
    .section-discover .max-width .btn{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 75px;
    }
    .section-discover .max-width .btn a{
        padding: 10px 20px;
        margin: 0 auto;
        background-color: #FF7675;
        border-radius: 20px;
        text-align: center;
        font-weight: 600;
        color: #fff;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        text-decoration: none;
    }
    /* Footer Styling */
    .footer{
        width: 100%;
        height: 500px;
        background: linear-gradient(#00000190, #00000190) ,url("<?php echo WEB_ROOT."media/bg_logos/assets/search-box-bg.jpg"?>") no-repeat center center/ cover;
        background-attachment: fixed;
        padding-top: 50px;
    }
    .footer .max-width{
        width: 90%;
        height: 100%;
        margin: 0 auto;
        text-align: center;
        position: relative;
    }
    .footer .max-width .footer-cards{
        width: 100%;
        margin: 0 auto;
        display: flex;
        color: #fff;
    }
    .footer .max-width .footer-card{
        width: 25%;
    }
    .footer .max-width .footer-card ul{
        list-style-type: none;
    }
    .footer .max-width .footer-card li{
        list-style-type: none;
        font-size: 20px;
        margin: 20px 0;
        font-weight: 500;
    }
    .footer .max-width .footer-card .title{
        color: #EAB637;
        font-size: 25px;
        font-weight: 700;
    }
    .footer .max-width .news-letter form .input-btn-cont{
        width: 30%;
        height: 50px;
        margin: 50px auto;
        border-radius: 25px;
        background-color: #fff;
        overflow: hidden;
    }
    .footer .max-width .news-letter form .input-btn-cont a{
        text-decoration: none;
        color: #000;
        padding: 10px;
        border-radius: 50%;
        font-weight: 600;
        background-color: #EAB637;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
    .footer .max-width .copyright{
        position: absolute;
        bottom: 10px;
        width: 100%;
        color: #fff;
        font-size: 15px;
        font-weight: 300;
    }
    .footer .max-width .copyright span{
        color: #EAB637;
    }


    /* Gestion Responsive */
    /* Mobile */
    @media (max-width: 480px) {
        
    }
    /* Tablet */
    @media (max-width: 768px) {
        
    }
    /* Desktop */
    @media (max-width: 992px) {
        
    }
    /* Huge */
    @media (max-width: 1280px) {
        
    }
</style>