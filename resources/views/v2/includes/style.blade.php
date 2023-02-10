<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<style>
    *,body{

    margin: 0;
    padding: 0;

    }

    body{

    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;

    }

    .left-section{

    width: 20%;
    height: 100%;
    background-color: white;

    }

    .right-section{

    width: 80%;
    height: 100%;
    background-color: white;

    }

    .left-section .header{

    width: 100%;
    height: 8%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ebebeb;

    }

    .left-section .header img{

    width: 15%;
    height: 80%;
    border-radius: 100%;

    }

    .left-section .header .menu{

    width: 80%;
    height: 80%;
    display: flex;
    align-items: center;
    justify-content: right;

    }


    .left-section .header .menu i{

    font-size: 18px;
    margin-right: 10px;
    cursor: pointer;

    }

    .left-section .search{

    width: 100%;
    height: 7%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f3f3f3;

    }
    .left-section .search div{
    width: 90%;
    height: 80%;
    border-radius: 100px;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    }
    .left-section .search div input{

    width: 78%;
    height: 70%;
    outline: none;
    border: none;
    background-color: transparent;
    font-size: 16px;
    margin-left: 5%;

    }

    .left-section .search div i{

    font-size: 16px;
    color: #464949;
    margin-left: 1%;

    }

    .left-section .messages{

    width: 100%;
    height: 85%;
    background-color: white;
    overflow-y: auto;
    overflow-x: hidden;

    }

    .left-section .messages .item{

    width: 94%;
    height: 12%;
    padding: 2% 3%;
    display: flex;
    align-items: center;
    position: relative;
    border-top: 1px solid rgb(197, 197, 197);
    cursor: pointer;
    transition: 0.5s;

    }

    .left-section .messages .item.active{

    background-color: #dddddd;

    }
    .left-section .messages .item:hover{

    background-color: #dddddd;

    }

    .left-section .messages .item .time{

    position: absolute;
    top: 15%;
    right: 2%;
    font-size: 14px;

    }

    .left-section .messages .item img{

    width: 22%;
    height: 80%;
    border-radius: 100%;
    box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.459);

    }
    .left-section .messages .item .des{

    height: 80%;
    width: 83%;
    margin-left: 4%;

    }

    .left-section .messages .item .des .name{

    width: 100%;
    margin-bottom: 3%;
    margin-top: 3%;
    font-weight: 600;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

    }

    .left-section .messages .item .des .message{

    color: #1d1d1d;
    width: 97%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    }


    .right-section{

    width: 80%;
    height: 100%;
    background-color: white;

    }

    .right-section .header{

    width: 100%;
    height: 8%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    background-color: #ebebeb;

    }

    .right-section .header img{

    width: 3.9%;
    height: 80%;
    border-radius: 100%;

    }

    .right-section .header .details{

    width: 80%;
    height: 85%;

    }

    .right-section .header .details .name{

    font-weight: 600;
    margin-top: .4%;
    margin-bottom: .2%;

    }

    .right-section .header .details .status{

    font-size: 14px;

    }

    .right-section .header .buttons{

    width: 10%;
    height: 80%;
    display: flex;
    align-items: center;
    justify-content: space-around;

    }

    .right-section .header .buttons i{

    font-size: 23px;
    cursor: pointer;

    }

    .right-section .messages-container{

    width: 100%;
    height: 81%;

    overflow: auto;

    }

    .right-section .messages-container .message{

    width: 100%;
    margin-top: 2%;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: left;
    margin-bottom: 2%;

    }

    .right-section .messages-container .message.receiver{
    justify-content: right;
    }

    .right-section .messages-container .message.receiver .msg{

    border-radius: 18px;
    border-bottom-right-radius: 2px;
    margin-right: 2%;
    background-color: #f1f1f1;
    color: black;

    }

    .right-section .messages-container .message .msg{

    max-width: 50%;
    padding: 1.6%;
    background-color: black;
    color: white;
    border-radius: 18px;
    border-bottom-left-radius: 2px;
    margin-left: 2%;

    }

    .right-section .messages-container .message .receiver{

    right: 0;

    }

    .right-section .input-box{

    width: 100%;
    height: 11%;
    background-color: rgb(239 239 239);
    display: flex;
    align-items: center;

    }

    .right-section .input-box p{

    font-size: 18px;
    cursor: pointer;
    margin-left: 1%;
    margin-right: .2%;

    }

    .right-section .input-box input{

    width: 85%;
    height: 60%;
    margin-left: 1%;
    margin-right: 1%;
    outline: none;
    border: none;
    background-color: white;
    border-radius: 100px;
    padding: 2%;

    }
    .right-section .input-box button{

    width: 6%;
    height: 60%;
    background-color: black;
    color: white;
    cursor: pointer;
    border: none;
    outline: none;
    font-size: 18px;
    border-radius: 4px;

    }

    .menu-container{

    position: absolute;
    width: 15%;
    background-color: white;
    box-shadow: 0 0 3px 0 black;
    z-index: 2;
    border-radius: 2px;
    top: 7%;
    left: 4%;
    overflow: hidden;
    display: none;

    }

    .menu-container .item{

    width: 100%;
    height: 10%;
    padding: 6% 3%;
    border-bottom: 1px solid rgb(199, 199, 199);
    cursor: pointer;
    transition: 0.4s;

    }

    .menu-container .item:hover{

    background-color: rgb(226, 226, 226);

    }

    .menu-container .logout{

    width: 100%;
    height: 10%;
    padding: 6% 0%;
    cursor: pointer;
    text-align: center;

    }
</style>
