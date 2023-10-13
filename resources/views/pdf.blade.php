<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        page
    </title>
    <style>


*,*::after, *::before{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}


body{
    direction: rtl;
    font-family: 'ar';
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: right;
    overflow-x: hidden;
}

.group{
    padding:30px 0;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    direction: rtl;
    text-align: right;
    width: 700px;
    min-height: 880px;
    padding: 20px;

}

.group img.bg{
    position: absolute;
    width: 100%;
    height: 95%;
    z-index: 0;
}

.group .text-content{
    font-size: .9rem;
    display: flex;
    width: 100%;
    justify-content: start;
    flex-direction: column;
    align-items: start;
    z-index: 2;
    gap: 10px;
}
.group .text-content p{
    font-size: .7rem;
    font-weight: 900;
    color: #fff;
    margin-bottom: 1rem;
}

.group .text-content p.red{
    color: #ff0000;
}

.group .text-content span.text{
    color: #000000;
}
.group .text-content .list{
    z-index: 2;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 1rem;
    width: 100%;
}
.group .text-content .title{
    font-size: 1.2rem;
    font-weight: 600;
    text-align: center;
    color: #fff;
    background-color: #000000;
    width: 100%;
}
.group .text-content .list .red{
    color: #ff0000;
}
.group .text-content .list h3{
    font-size: 1rem;
    font-weight: 600;
    color: #ffffff;
    text-align: center;
    width: 100%;
    background-color: #000000;
}
.group .text-content .list .group-sign{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    gap: 10px;
}
.group .text-content .list .group-sign img{
    width: 180px;
}

    </style>
</head>
<body>
    <div class="group">
        <img alt="test" class="bg"  src="./storage/image/header.jpg" alt="">
        <div class="text-content">
            <div
            class="title"
            >
                <h3>
                   pozakpao
                </h3>
            </div>
            <p
            class="red"
            >
               kpozaakpzpzk
            </p>
            <div class="list">
                <p
                class="red"
                >
                    kmzaozmza
                </p>
                <ul>
                    <li>
                       
                    </li>
                </ul>
            </div>
            <div class="list">
                <h3>
                    kmzaoakozkap
                </h3>
                <ul>
                    <li>
                    kkaokpozpza
                    </li>
                    <li>
                     kososkpossk
                    </li>
                    <li>
                       okoqspkao
                    </li>
                    <li class="red">
                       koakokap
                    </li>
                    <li class="red">
                      poksoksokso
                    </li>
                </ul>
            </div>
            <div class="list">
                <h3>
                   iwsosos
                </h3>
                <div class="group-sign">
                   <img src="./WhatsApp Image 2023-10-13 at 5.41.22 PM.jpeg" alt="./">
                   <p>
                       skoposks
                   </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
