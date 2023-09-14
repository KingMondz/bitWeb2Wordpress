<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section2</title>
    <!-- <link rel="stylesheet" href="section2.css"> -->

<style>
    header{
    background-color: #f63232;
    padding: 20px;
    text-align: center;
    position: fixed;
    width: 100%;
    height: 100px;
    z-index: 1;
    top: 0;
    left: 0;
    }
    header h1{
    color: white;
    border: 8px solid white;
    padding: 0px 12px;/*first value is for top and bottom while 2nd valu is left and right*/
    display: inline-block;
    border-radius: 36px;
    top: 0;
    }
    section{
    background: white;
    text-align: center;
    align-items: center;
    margin: auto;
    columns: 3;
    height: fit-content;
    width: 80vw;
    margin-top: 120px;   
    }
    section div{
    box-sizing: border-box;
    display: inline;
    aspect-ratio: auto;
    overflow: none;
    height: 100%;
    width: 33%;
    padding: 20px;
    margin: auto;
    font-family: sans-serif;
    /* position: relative;
    vertical-align: middle; */
    }
    section div h1{
    max-width: 100%;
    }
    section div h2{
    max-width: 100%;
    }
    section div img{
    max-width: 100%;
    display: flex;
    }
    section div p{
    /* position: absolute; */
    line-height: 2em;/*This is the distance between the lines of content*/
    top: 50%;
    max-width: 100%;
    }
</style>

</head>
<body>
    <header>
        <h1>Mario Club</h1>
    </header>
    <section>
    <div>
        <h2>Welcome to bitlink</h2><br>
        <h1>Hello!</h1><br>
        <p>Bitlink Company Ltd. was started with a simple principle in mind: that ICT should be an enabler, not a bottleneck. Few companies in Kenya and East Africa ever achieve even 50% of the possible operational benefits from their ICT systems.</P>
        <br>
        <br>
        <p>With that in mind, Bitlink was founded in 1998 with a new business model:</p><strong>It was technical staff, and not the sales team…</strong></p>
    </div>
    <div>
        <img src="img/Bitlink-Staff-Working.jpg" alt="Bitlink-Employee-Working" class="img2">
    </div>
    <div>
        <br><br>
        <P><strong> that would call the shots.</strong> Giving the customer exactly what they were promised, and exactly what they needed, was the top priority.
        <br><br>
        <p>Two years later, we opened our office at the Upper Hill business hub in Nairobi. Since then, we have expanded our service offerings while staying true to our mission.</p>
        <br>
        <p>We help organisations realise the benefits of ICT and Power solutions that just work—no hassle, no hidden costs, and no compromise.</p>
    </div>
    </section>
</body>
</html>