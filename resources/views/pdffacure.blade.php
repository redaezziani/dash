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
    font-family: 'Cairo', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow-x: hidden;
}

.group{
    padding:30px 0;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: start;
    flex-direction: column;
    width: 700px;
    min-height: 880px;
    padding: 20px;
    border: 1px solid #000;

}
.group .groups{
    display: flex;
    justify-content: space-between;
    align-items: start;
    width: 100%;
}
.group .groups .g-1{
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: flex-start;
}
.group .groups .g-1 .title{
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 20px;
}
.group .groups .g-1 .text{
    font-size: 16px;
    font-weight: 400;
}
.group .groups .g-1 .text .big{
    font-size: 30px;
    font-weight: 700;
}
.group .groups .g-1 p{
    font-size: 16px;
    font-weight: 400;
}
.group .groups .g-2{
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
}
.group .groups .g-2 img{
    width: 70%;
    height: 70%;
    object-fit: cover;
    object-position: center;
    margin-bottom: 20px;
}
.group .groups .g-2 .table{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;
}
.group .groups .g-2 .table .head{
    width: 100%;
    display: flex;
    justify-content: space-around;
    padding: 5px 10px;
    align-items: center;
    flex-direction: row;
    margin-bottom: 10px;
    background-color: blue;
    color: aliceblue;
}

.group .groups .g-2 .table .body{
    width: 100%;
    display: flex;
    justify-content: space-around;
    padding: 5px 10px;
    align-items: center;
    flex-direction: row;
    margin-bottom: 10px;
}
.group .groups .g-2 .table .body .half{
    width: 50%;
    display: flex;
    justify-content: space-around;
    padding: 5px 10px;
    align-items: center;
    flex-direction: row;
    margin-bottom: 10px;
}
.group .groups .g-1 .head{
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.group .groups .g-1 .head .m{
    font-size: 16px;
    color: aliceblue;
    background-color: blue;
    padding: 5px 10px;
}
.group .groups .g-1 .head p{
    font-size: 16px;
    font-weight: 400;
    margin-bottom: 10px;
}

.group .table{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;
}
.group .table .head{
    width: 100%;
    display: flex;
    justify-content: space-around;
    padding: 5px 10px;
    align-items: center;
    flex-direction: row;
    margin-bottom: 10px;
    background-color: blue;
    color: aliceblue;
}

.group .table .body{
    width: 100%;
    display: flex;
    justify-content: space-around;
    padding: 5px 10px;
    align-items: center;
    flex-direction: row;
    margin-bottom: 10px;
}

.group .table .body .half{
    width: 50%;
    display: flex;
    justify-content: space-around;
    padding: 5px 10px;
    align-items: center;
    flex-direction: row;
    margin-bottom: 10px;
}

.group .footer{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: start;
    flex-direction: row;
    margin-top: 20px;
}
.group .footer .g-1{
    width: 50%;
    display: flex;
    justify-content: start;
    align-items: start;
    flex-direction: column;
    position: relative;


}
.group .footer .g-1 p{
    width: 100%;
    font-size: 16px;
    color: blue;
    background-color: rgba(169, 169, 248, 0.712);
    font-weight: 400;
    margin-bottom: 10px;
}

.group .footer .g-2{
    width: 50%;
    display: flex;
    justify-content: start ;
    align-items: start;
    color: rgb(0, 0, 0);
    background-color: rgba(162, 162, 252, 0.712);
}
.group .footer .g-2 .groupe-1{
    width: 100%;
    display: flex;
    justify-content: start;
    align-items: start;
    flex-direction: column;
    color: rgb(0, 0, 0);
    background-color: rgba(169, 169, 248, 0.712);
    padding: 5px 10px;
}
.group .footer .g-2 .groupe-2{
    width: 100%;
    height: 100%;
    position: relative;
    display: flex;
    justify-content: end;
    align-items: end;
    background-color: rgba(207, 207, 255, 0.712);

    padding: 5px 10px;
}

.group .footer .g-2 .groupe-2 p{
    position: absolute;
    top: 90px;
    right: 5;
}

.group .footer .g-1  .sign{
    position: absolute;
    width: 130px;
    height: 130px;
    object-fit: cover;
    object-position: center;
    top: 40px;
    z-index: 0;
    left: 20px;
}
.group .footer .g-1 .text-sing{
    color: black;
    font-size: 16px;
    font-weight: 400;
    margin-bottom: 10px;
    z-index: 1;
    background-color: transparent;
}
.group .last{
    width: 70%;
    margin-top: 10px;
    text-align: center;
    margin-left: 100px;
    z-index: 1;
}

    </style>
</head>
<body>
    <div class="group">
        <h2
                class="title"
                >
                    KHAT AL EHTERRAF DESIGNER WE SITE
                </h2>
        <div class="groups">
            <div class="g-1">

                <p
                class="text"
                >
                united arab emirates <span class="big">INVOICE</span>
                Dubai
                </p>
                <p>
                    [+971] 599-4530
                </p>
                <p>
                    Commerial License No. 889765
                </p>

                <div class="head">
                    <p
                    class="m"
                    >
                        build to
                    </p>
                    <p>
                        ahmed mohamed
                    </p>
                    <p>
                        99848477888673
                    </p>
                </div>
            </div>
            <div class="g-2">
                <img src="./WhatsApp Image 2023-10-14 at 1.40.06 PM.jpeg" alt="" srcset="">
                <div
                class="table"
                >
                <div class="head">
                    <p>
                        INVOICE
                    </p>

                    <p>
                        DATE
                    </p>
                </div>
                <div class="body">
                    <p>
                        001
                    </p>
                    <p>
                        14/10/2021
                    </p>
                </div>
                </div>
                <div
                class="table"
                >
                <div class="head">
                    <p>
                        CASTOMER ID
                    </p>

                    <p>
                        TERMS
                    </p>
                </div>
                <div class="body">
                    <p
                    class="half"
                    >
                        123
                    </p>
                    <p
                    class="half"
                    >
                        web site design and development
                    </p>
                </div>
                </div>
            </div>

        </div>
        <div class="table">
            <div class="head">
                <p>
                    DESCREPTION
                </p>
                    <p>
                        QTY
                    </p>
                    <p>
                        UNIT PRICE
                    </p>
                    <p>
                        AMOUNT
                    </p>
            </div>
            <div class="body">

                <p
                class="half"
                >
                    web site design and development
                </p>
                <p
                class="half"
                >
                    1
                </p>
                <p
                class="half"
                >
                    1000
                </p>
                <p
                class="half"
                >
                    1000
                </p>
            </div>
        </div>
        <div class="footer">
            <div class="g-1">
                <p>
                    <span class="big">THANK YOU</span> FOR YOUR BUSINESS!
                </p>
                <p
                class="text-sing"
                >
                    Signature et stamp
                </p>
                <img class="sign" src="./WhatsApp Image 2023-10-13 at 5.41.22 PM.jpeg" alt="" srcset="">
            </div>
            <div class="g-2">
                <div class="groupe-1">
                    <P>
                        SUBTOTAL
                    </P>
                    <p>
                        PIAD
                    </p>
                    <P>
                        DUE
                    </P>
                    <P>
                        TOTAL
                    </P>
                </div>
                <div class="groupe-2">
                    <P>
                        129939 درهم اماراتي
                    </P>
                </div>
            </div>
        </div>
        <p
        class="last"
        >
        The invoice is considered void without signature and company seal
        If you have any questions about this invoice, please contact
        <br>
        <b>
         KHAT AL EHTERAF COMPUTER DESIGING +971505994530 info@plinee.com
        </b>
        </p>
    </div>
</body>
</html>
