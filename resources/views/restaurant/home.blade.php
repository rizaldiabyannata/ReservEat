<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    @vite('resources/css/dbr.css')
    @vite('resources/css/app.css')
</head>

<body>

    <div class="container">
        <div class="sidebar">
            <div class="top"></div>
            <x-side-bar></x-side-bar>
            <!-- <nav class="navBar"> -->
        </div>
        <div class="mainbar">
            <div class="topMainBar">
                <h1 class="rtd">Rstoran Dashboard</h1>
                <h2>Halo, selamat datang!</h2>
            </div>
            <div>

                <!-- pb -->
                <div class="pembungkus">

                    <div class="tempatDiagram">
                        <div class="atas">
                            <h3>rencananya disini tempat diagram</h3>
                        </div>

                        <div class="ket_sesuatu">
                            <h6>Your Monthly Report</h6>
                            <p>Lorem Lorem ipsum dolor sit amet. ipsum dolor sit amet.</p>
                        </div>

                    </div>
                    <div class="box">
                        <div class="topbox">
                            <p style="color: rgb(55, 116, 206)">Panel Kontrol</p>
                            <h3>mancan negara</h3>
                            <div class="info">
                                <div class="nav activeNav">
                                    <p>daftar pesanan</p>
                                    <!-- <span>14</span> -->
                                </div>
                                <div class="nav">
                                    <p>riwayat</p>
                                    <!-- <span>24</span> -->
                                </div>
                                <div class="nav">
                                    <p>cari riwayat pesanan</p>
                                </div>
                            </div>
                        </div>

                        <div class="allDetails">

                            <div class="detailsSection">
                                <div class="details">
                                    <div class="topDetails">
                                        <div class="leftSide">
                                            <p>?</p>
                                            <span>makanan</span>
                                        </div>
                                        <div class="rightSide">
                                            <p>$ 325 000.00</p>
                                        </div>
                                    </div>
                                    <div class="sortDetails">
                                        <p>Sort by: Name A-Z</p>
                                    </div>
                                    <div class="othersDetailss">
                                        <p>wagyu</p>
                                        <p>...</p>
                                    </div>
                                    <div class="othersDetails">
                                        <div class="left">
                                            <p>sate</p>
                                            <p>...</p>
                                        </div>
                                        <div class="right">
                                            <p>$ 234 000.00</p>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="othersDetails">
                                        <div class="left">
                                            <p>babi guling</p>
                                        </div>
                                        <div class="right">
                                            <p>...</p>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="othersDetails">
                                        <div class="left">
                                            <p>kambing guling</p>
                                            <p>...</p>
                                        </div>
                                        <div class="right">
                                            <p>$ 80 000.00</p>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="othersDetails empty"></div>
                                    <div class="othersDetails floating">
                                        <div class="left floatleft">
                                            <p>Triguard Partners</p>
                                            <p>...</p>
                                        </div>
                                        <div class="float">
                                            <p>$ 234 000.00</p>
                                            <span>SB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2nd  -->
                            <div class="detailsSection">
                                <div class="details2">
                                    <div class="topDetails">
                                        <div class="leftSide">
                                            <p>Review</p>
                                            <span>3</span>
                                        </div>
                                        <div class="rightSide">
                                            <!-- <p>?</p> -->
                                        </div>
                                    </div>
                                    <div class="sortDetails">
                                        <p>Sort by: Name A-Z</p>
                                    </div>
                                    <div class="othersDetails">
                                        <div class="left">
                                            <p>wagyunya ngga enak ngga rekomendit</p>
                                            <p>...</p>
                                        </div>
                                        <div class="right">
                                            <!-- <p>$ 220 000.00</p> -->
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="othersDetails">
                                        <div class="left">
                                            <p>es teler mabok duriannya enak banget</p>
                                            <p>...</p>
                                        </div>
                                        <div class="right">

                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="othersDetailss">
                                        <p>banna es criemnya apa lagi</p>
                                        <p>...</p>
                                    </div>

                                    <div class="othersDetails empty"></div>

                                </div>
                            </div>
                            <!-- 3rd  -->
                            <div class="detailsSection">
                                <div class="details3">
                                    <div class="topDetails">
                                        <div class="leftSide">
                                            <p>Negotiation</p>
                                            <span>6</span>
                                        </div>
                                        <div class="rightSide">
                                        </div>
                                    </div>
                                    <div class="sortDetails">
                                        <p>Sort by: Name A-Z</p>
                                    </div>
                                    <div class="othersDetails">
                                        <div class="left">
                                            <p>aldi</p>
                                            <p>...</p>
                                        </div>
                                        <div class="right">
                                            <p>1k</p>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="othersDetails">
                                        <div class="left">
                                            <p>ario</p>
                                            <p>...</p>
                                        </div>
                                        <div class="right">
                                            <p>ceban</p>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="othersDetails">
                                        <div class="left">
                                            <p>sapa</p>
                                            <p>...</p>
                                        </div>
                                        <div class="right">
                                            <p>1k</p>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="othersDetails">
                                        <div class="left">
                                            <p>a</p>
                                            <p>...</p>
                                        </div>
                                        <div class="right">
                                            <p>2k</p>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="othersDetails">
                                        <div class="left">
                                            <p>tur</p>
                                            <p>...</p>
                                        </div>
                                        <div class="right">
                                            <p>5k</p>
                                            <span></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- 4th 
        <div class="detailsSection">
          <div class="details4">
            <div class="topDetails">
              <div class="leftSide">
                <p>Due D</p>
                <span>6</span>
              </div>
              <div class="rightSide">
                <p>$ 1 151 000.00</p>
              </div>
            </div>
            <div class="sortDetails">
              <p>Sort by: Name A-Z</p>
            </div>
              <div class="othersDetails">
              <div class="left">
                <p></p>
                <p></p>
              </div>
              <div class="right">
                <p></p>
                <span></span>
              </div>
            </div>
     -->


                        </div>
                    </div> .
                </div>
            </div>
        </div>
    </div>
</body>

</html>