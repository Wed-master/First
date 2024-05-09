function battle(x1,x2,x3,x4,AT,HP,ZAS) {
      if (!pitB) {
          pitB=[rand(0,2),-1,-1,-1];
          for (var i = 0; i < atP.length; i++) {
              atPB[i]=atP[i];
              hpPB[i]=hpP[i];
          }
      }
        batMus.currentTime = 0.0;
        menuMus.pause();
          batMus.play();
        document.body.style.overflow = 'hidden';
        scren.innerHTML = '';
        if (teef==4) {
        out('<img src=pole2.png width=100% height=100% style="position:fixed;top:0;left:0;">')
        } 
        if (teef==2) {
            out('<img src=pole4.png width=100% height=100% style="position:fixed;top:0;left:0;">')
        }
        if (teef==1||teef==-1) {
            out('<img src=pole.png width=100% height=100% style="position:fixed;top:0;left:0;">')
        }
        pers = [crow[0], crow[1], crow[2], crow[3], x1, x2 ,x3, x4]
        comp = [0, 0, 0, 0, 1, 1, 1, 1]
        neus=[0,0,0,0,0,0,0,0];
        primen=[1,1,1,1,1,1,1,1];
        pl = [0, 0, 0, 0, 1, 1, 1, 1]
        color = ['lime', 'lime', 'lime', 'lime', 'red', 'red', 'red,', 'red']
    if (crowS2[0]) {
        out('<img src=ulta'+(crowS2[0]+1)+'.gif width=80% height=100% style="position:fixed;top:-10000;left:40;">')
        out('<img src=stop'+(crowS2[0]+1)+'.png width=80% height=100% style="position:fixed;top:-10000;left:40;">')
        out('<span style="position:absolute;top:0;left:0;width:80%;height:100%;" id=general0><img src=stop'+(crowS2[0]+1)+'.png width=80% height=100% style="position:fixed;top:0;left:40;"></span>')
        setTimeout(generUlt, V[crowS2[0]] * 1000, crowS2[0], 0);
    }
    if (crowS2[1]) {
        out('<img src=ulta'+(crowS2[1]+1)+'.gif width=80% height=100% style="position:fixed;top:-10000;left:40;">')
        out('<img src=stop'+(crowS2[1]+1)+'.png width=80% height=100% style="position:fixed;top:-10000;left:40;">')
        out('<span style="position:absolute;top:0;left:122;width:488;height:275;transform:scale(-1,1);" id=general1><img src=stop'+(crowS2[1]+1)+'.png width=488 height=275 style="position:fixed;top:0;left:40;"></span>')
        setTimeout(generUlt, V[crowS2[1]] * 1000, crowS2[1], 1);
    }
      for (var i = 0; i < pers.length; i++) {
        out('<img src='+stopB[i]+'.png>')
        out('<img src='+udarB[i]+'.gif>')
        out('<img src='+ultaB[i]+'.gif>')
      }
        for (var i = 0; i < 8; i++) {
            if (String(pers[i]).indexOf('scelet')==-1||i<4) {
                atB[i] = at[pers[i]];
                hpB[i] = hp[pers[i]];
                zasB[i] = zas[pers[i]];
                if (i > 3) {
                    atB[i] = AT[i-4];
                    hpB[i] = HP[i-4];
                    zasB[i] = ZAS[i-4];
                }
            } else {
                if (pers[i] == 'scelet') {
                    atB[i]=200;
                    hpB[i]=1000;
                    zasB[i]=10;
                } else if (pers[i] == 'wscelet') {
                    atB[i]=600;
                      hpB[i]=3000;
                      zasB[i]=30;
                }else if (pers[i] == 'kscelet') {
                    atB[i]=1100;
                      hpB[i]=7000;
                      zasB[i]=120;
                } else {
                    atB[i]=2000;
                      hpB[i]=15000;
                      zasB[i]=200;
                }
            }
        }
        for (var i = 0; i < yo.length; i++) {
            cheL[i] = -1;
            cheL2[i] = -1;

        }
      for (var i = 0; i < 4; i++) {
            if (crowP[i] != -1) {
                atB[i] += atP[crowP[i]];
                hpB[i] += hpP[crowP[i]];
            }
        }
      for (var i = 4; i < 8; i++) {
          if (pitB[i-4] != -1) {
              atB[i] += atPB[pitB[i-4]];
              hpB[i] += hpPB[pitB[i-4]];
              var ind=pitB[i-4];
              pitB=0;
              pitB=ind;
              break;
          }
      }
        for (var i = 0; i < 8; i++) {
            atIsn[i] = atB[i];
            hprIsn[i] = hpB[i];
            zasIsn[i] = zasB[i];
        }
        //alert(hb[0]+' '+hb[1]+' '+hb[2])
        yo = [[1, 6], [2, 6], [3, 6], [4, 6], [1, 11], [2, 11], [3, 11], [4, 11]]
        for (var i = 0; i < 8; i++) {
            if (!hpB[i] || pers[i]==-1) {
                hpB[i] = 0;
                GOO[i] = 0;
                yo[i][0] = -1000;
            }
        }
        //alert(atB+"\n"+hpB+"\n"+zasB)
        out('<b style="position:absolute;bottom:5;left:0;width:610;text-align:center;font-size:35;color:red;">VS</b>')
        for (var i = 0; i < 4; i++) {
            out('<span style="position:absolute;top:' + yo[i][0] * 30 + ';left:' + yo[i][1] * 30 + ';width:150;height:90;transform:rotate(-90deg);" id=hero' + i + '><img src=stop' + pers[i] + '.png width=150 height=90></span>')
            compi(i, 1);
            out('<span style="position:absolute;bottom:5;left:' + i * 50 + ';width:45;height:45;background:url(fon.png);background-size:200px 120px;border:1.5px ridge black;"><img src=' + (prof[pers[i]]) + ' style="position:absolute;top:-8;left:-15;width:70;height:45;"><img src=ubit.png style="position:absolute;top:0;left:0;top:0;width:0;height:40;" id=ubit' + i + '><span style="position:absolute;bottom:0;width:45;height:5;background:black;"></span><span style="position:absolute;bottom:0;width:45;height:5;background:lime;" id=hpBat' + i + '></span></span>')
        }
        for (var i = 4; i < 8; i++) {
            out('<span style="position:absolute;top:' + yo[i][0] * 30 + ';left:' + yo[i][1] * 30 + ';width:150;height:90;transform:rotate(90deg);" id=hero' + i + '><img src=stop' + pers[i] + '.png width=150 height=90></span>')
            compi(i, 0);
            if(String(x2).indexOf('scelet')==-1) {
                out('<span style="position:absolute;bottom:5;right:' + (i - 4) * 50 + ';width:45;height:45;background:url(fon.png);background-size:200px 120px;border:1.5px ridge black;"><img src=' + (prof[pers[i]]) + ' style="position:absolute;top:-8;left:-15;width:70;height:45;"><img src=ubit.png style="position:absolute;top:0;left:0;top:0;width:0;height:40;" id=ubit' + i + '><span style="position:absolute;bottom:0;width:45;height:5;background:black;"></span><span style="position:absolute;bottom:0;width:45;height:5;background:lime;" id=hpBat' + i + '></span></span>')
            } else {
                out('<span style="position:absolute;bottom:5;right:' + (i - 4) * 50 + ';width:45;height:45;background:url(fon.png);background-size:200px 120px;border:1.5px ridge black;"><img src=prof' + (pers[i]) + '.png style="position:absolute;top:-8;left:-15;width:70;height:45;"><img src=ubit.png style="position:absolute;top:0;left:0;top:0;width:0;height:40;" id=ubit' + i + '><span style="position:absolute;bottom:0;width:45;height:5;background:black;"></span><span style="position:absolute;bottom:0;width:45;height:5;background:lime;" id=hpBat' + i + '></span></span>')
            }
        }
      if (crowP[0]!=-1||crowP[1]!=-1||crowP[2]!=-1||crowP[3]!=-1) {
          var rocket;
          for (var i = 0; i < 4; i++) {
              if (crowP[i] != -1) {
                  rocket=crowP[i];
              }
          }
          for (var i = 0; i < 4; i++) {
              if (crowP[i] != -1) {
                out('<span style="position:absolute;top:75;left:100;width:150;height:90;" id=pitom' + 0 + '><img src=polet'+crowP[i]+'.gif width=150 height=90></span>')
                  out('<img src=polet'+crowP[i]+'.png width=50 height=50>')
                  out('<img src=pit'+crowP[i]+'.png width=50 height=50>')
                out('<span style="position:absolute;top:-1000;left:0;width:60;height:60;z-index:10000000;opacity:0.8;" id=ultaP' + 0 + '><img src=ulti'+crowP[i]+'.png style="width:60;height:60;z-index:10000000;"></span>')
              setTimeout(function () {
                  setTimeout(pitP, 1000, rocket, 0)
              }, eneP[rocket])
          }
          }
      }
      if (Array.isArray(pitB) == false) {
      out('<span style="position:absolute;top:75;left:360;width:150;height:90;transform:rotate(-180deg);" id=pitom' + 1 + '><img src=polet'+pitB+'.gif width=150 height=90></span>')
            out('<img src=polet'+pitB+'.png width=50 height=50>')
            out('<img src=pit'+pitB+'.png width=50 height=50>')
          out('<span style="position:absolute;top:-1000;left:0;width:60;height:60;z-index:10000000;opacity:0.8;" id=ultaP' + -1 + '><img src=ulti'+pitB+'.png style="width:60;height:60;z-index:10000000;transform:rotate(180deg);"></span>')
        setTimeout(function () {
            setTimeout(pitP2, 1000, pitB, 1)
        }, eneP[pitB])
      }
        if (pers.indexOf(13) != -1) {
            out('<span style="position:absolute;top:-1000;left:0;width:60;height:60;z-index:10000000;" id=ultaP' + 1 + '><img src=tor.png style="width:60;height:60;z-index:10000000;"></span>')
        }
        if (pers.indexOf(14) != -1) {
              out('<span style="position:absolute;top:-1000;left:0;width:60;height:60;z-index:10000000;" id=ultaP' + 3 + '><img src=meteor.png style="width:80;height:100;z-index:10000000;"></span>')
          }
        if (pers.indexOf(15) != -1) {
            out('<span style="position:absolute;top:-1000;left:0;width:100;height:100;z-index:10000000;" id=ultaP' + 5 + '><img src=nubik.png style="width:100;height:100;z-index:10000000;"></span>')
        }
        //ho=0;
      if (red[crowS[0]] == 'страж') {
      out('<img src='+ulta[crowS[0]]+'.gif style="position:absolute;top:-37.5;left:-2000;transform:rotate(-90deg);width:500;height:350;z-index:10000000;" id=ultaS0>');
      setTimeout(superU, V[crowS[0]]*1000, 0)
      }
      if (red[crowS[1]] == 'страж') {
        out('<img src='+ulta[crowS[1]]+'.gif style="position:absolute;top:-37.5;right:-2000;transform:rotate(90deg);width:500;height:350;;z-index:10000000;" id=ultaS1>');
        setTimeout(superU, V[crowS[1]]*1000, 1)
        }
        setTimeout(arteFact, 7000, hod);

        //setTimeout(lose, 5000)
    }
    function generUlt(hod, x) {
        document.getElementById("general"+x).innerHTML='<img src=ulta'+(crowS2[x]+1)+'.gif width=488 height=275 style="position:fixed;top:0;left:40;">';
        setTimeout(function() {
            // урон
            if (crowS2[x] == 34) {
                for (var i = 0; i < 8; i++) {
                    if (pl[i] != x) {
                        hpB[i]-=atStr2[x]*0.1;
                    } else {
                        if(hpB[i]>0)hpB[i]+=atStr2[x]*0.05;
                    }
                }
            }
            if (crowS2[x] == 35) {
                for (var i = 0; i < 8; i++) {
                    if (pl[i] != x) {
                        hpB[i]-=atStr2[x]*0.1;
                        zasB[i]/=2;
                        setTimeout(offUsil, 2000, i);
                    }
                }
            }
            for (var i = 0; i < 8; i++) {
                  if (hpB[i] < 0) {
                      hpB[i]=0;
                      document.getElementById("ubit" + i).style.width = 45;
                  }
                  if (String(pers[i]).indexOf('scelet')==-1) {
                        document.getElementById("hpBat" + i).style.width = 45 / (hprIsn[i] / hpB[i]);
                    } else {
                        document.getElementById("hpBat" + i).style.width = 45 / (whatHP(pers[i]) / hpB[i]);
                    }
              }
            setTimeout(function() {
                document.getElementById("general"+x).innerHTML='<img src=stop'+(crowS2[x]+1)+'.png width=488 height=275 style="position:fixed;top:0;left:40;">';
                setTimeout(generUlt, V[hod]*1000, hod, x);
            }, dal[hod]*1000 / 2)
        }, dal[hod]*1000 / 2)
    }
  function superU(x) {
      if (x == 0) {
          ultaS0.style.left=10;
      } else {
          ultaS1.style.right=10;
      }
      setTimeout(function() {
            if (crowS[x] == 27) {
                for (var i = 0; i < 8; i++) {
                    if (pl[i] != x && neus[i] != 1) {
                        if (hpB[i] > 0)hpB[i]-=atStr[x]*0.8;
                        zasB[i]/=2;
                        setTimeout(offUsil, 3000, i);
                    }
                }
            }
          if (crowS[x] == 28) {
              for (var i = 0; i < 8; i++) {
                  if (pl[i] != x && neus[i] != 1) {
                      if (hpB[i] > 0)hpB[i]-=atStr[x]*0.4;
                      atB[i]/=2;
                      setTimeout(offUsil, 3500, i);
                  }
              }

          }
          if (crowS[x] == 29) {
                for (var i = 0; i < 8; i++) {
                    if (pl[i] != x && neus[i] != 1) {
                        if (hpB[i] > 0)hpB[i]-=atStr[x]*0.6;
                    } else if (pl[i] == pl[hod]) {
                        zasB[i]*=2;
                          setTimeout(offUsil, 3000, i);
                    }
                }

            }
          if (crowS[x] == 30) {
              for (var i = 0; i < 8; i++) {
                  if (pl[i] != x && neus[i] != 1) {
                      if (hpB[i] > 0)hpB[i]-=atStr[x]*0.25;
                      for (var i = 0; i < 8; i++) {
                            if (hpB[i] < 0) {
                                hpB[i]=0;
                                document.getElementById("ubit" + i).style.width = 45;
                            }
                            if (String(pers[i]).indexOf('scelet')==-1) {
                                  document.getElementById("hpBat" + i).style.width = 45 / (hprIsn[i] / hpB[i]);
                              } else {
                                  document.getElementById("hpBat" + i).style.width = 45 / (whatHP(pers[i]) / hpB[i]);
                              }
                        }
                      setTimeout(function(){
                          if (hpB[i] > 0)hpB[i]-=atStr[x]*0.25;
                          for (var i = 0; i < 8; i++) {
                              if (hpB[i] < 0) {
                                  hpB[i]=0;
                                  document.getElementById("ubit" + i).style.width = 45;
                              }
                              if (String(pers[i]).indexOf('scelet')==-1) {
                                  
                                    document.getElementById("hpBat" + i).style.width = 45 / (hprIsn[i] / hpB[i]);
                                } else {
                                    document.getElementById("hpBat" + i).style.width = 45 / (whatHP(pers[i]) / hpB[i]);
                                }
                          }
                      }, 500);
                      setTimeout(function(){
                          if (hpB[i] > 0)hpB[i]-=atStr[x]*0.25;
                          for (var i = 0; i < 8; i++) {
                              if (hpB[i] < 0) {
                                  hpB[i]=0;
                                  document.getElementById("ubit" + i).style.width = 45;
                              }
                              if (String(pers[i]).indexOf('scelet')==-1) {
                                    document.getElementById("hpBat" + i).style.width = 45 / (hprIsn[i] / hpB[i]);
                                } else {
                                    document.getElementById("hpBat" + i).style.width = 45 / (whatHP(pers[i]) / hpB[i]);
                                }
                          }
                        }, 1000);
                  }
              }
          }
          for (var i = 0; i < 8; i++) {
              if (hpB[i] < 0) {
                  hpB[i]=0;
                  document.getElementById("ubit" + i).style.width = 45;
              }
              if (String(pers[i]).indexOf('scelet')==-1) {
                  
                    document.getElementById("hpBat" + i).style.width = 45 / (hprIsn[i] / hpB[i]);
                } else {
                    document.getElementById("hpBat" + i).style.width = 45 / (whatHP(pers[i]) / hpB[i]);
                }
          }
        }, dal[crowS[x]]*1000/2)
      setTimeout(function() {
          if (x == 0) {
            document.getElementById("ultaS"+x).style.left=-2000;
          } else {
              document.getElementById("ultaS"+x).style.right=-2000;
          }
          setTimeout(superU, V[crowS[x]]*1000, x);
      }, dal[crowS[x]]*1000)
  }
    function battle2() {
          batMus.currentTime = 0.0;
          menuMus.pause();
            batMus.play();
          document.body.style.overflow = 'hidden';
          scren.innerHTML = '';
          if (teef==4) {
          out('<img src=pole2.png width=100% height=100% style="position:fixed;top:0;left:0;">')
          } 
          if (teef==2) {
              out('<img src=pole4.png width=100% height=100% style="position:fixed;top:0;left:0;">')
          }
          if (teef==1) {
              out('<img src=pole5.png width=100% height=100% style="position:fixed;top:0;left:0;">')
          }
          pers = [crowI[0], crowI[1], crowI[2], crowI[3], rand(0,23), rand(0,23) ,rand(0,23), rand(0,23)]
          comp = [0, 0, 0, 0, 1, 1, 1, 1]
          neus=[0,0,0,0,0,0,0,0];
          pl = [0, 0, 0, 0, 1, 1, 1, 1]
        primen=[1,1,1,1,1,1,1,1];
          color = ['lime', 'lime', 'lime', 'lime', 'red', 'red', 'red,', 'red']
        for (var i = 0; i < pers.length; i++) {
          out('<img src=stop'+(pers[i]+1)+'.png>')
          out('<img src=udar'+(pers[i]+1)+'.gif>')
          out('<img src=ulta'+(pers[i]+1)+'.gif>')
        }
          for (var i = 0; i < 4; i++) {
              atB[i] = atStart[pers[i]];
              hpB[i] = hpStart[pers[i]];
              zasB[i] = zasStart[pers[i]];
          }
        for (var i = 4; i < 8; i++) {
              atB[i] = atStart[pers[i]]+rand(0,30);
              hpB[i] = hpStart[pers[i]]+rand(0,150);
              zasB[i] = zasStart[pers[i]]+rand(0,15);
          }
          for (var i = 0; i < yo.length; i++) {
              cheL[i] = -1;
              cheL2[i] = -1;

          }
          //alert(hb[0]+' '+hb[1]+' '+hb[2])
          yo = [[1, 6], [2, 6], [3, 6], [4, 6], [1, 11], [2, 11], [3, 11], [4, 11]]
          for (var i = 0; i < 8; i++) {
              if (!hpB[i] || pers[i]==-1) {
                  hpB[i] = 0;
                  GOO[i] = 0;
                  yo[i][0] = -1000;
              }
          }
        for (var i = 0; i < 8; i++) {
              atIsn[i] = atB[i];
              hprIsn[i] = hpB[i];
              zasIsn[i] = zasB[i];
          }
          out('<b style="position:absolute;bottom:5;left:0;width:610;text-align:center;font-size:35;color:red;">VS</b>')
          for (var i = 0; i < 4; i++) {
              out('<span style="position:absolute;top:' + yo[i][0] * 30 + ';left:' + yo[i][1] * 30 + ';width:150;height:90;transform:rotate(-90deg);" id=hero' + i + '><img src=stop' + pers[i] + '.png width=150 height=90></span>')
              compi(i, 1);
              out('<span style="position:absolute;bottom:5;left:' + i * 50 + ';width:45;height:45;background:url(fon.png);background-size:200px 120px;border:1.5px ridge black;"><img src=' + (prof[pers[i]]) + ' style="position:absolute;top:-8;left:-15;width:70;height:45;"><img src=ubit.png style="position:absolute;top:0;left:0;top:0;width:0;height:40;" id=ubit' + i + '><span style="position:absolute;bottom:0;width:45;height:5;background:black;"></span><span style="position:absolute;bottom:0;width:45;height:5;background:lime;" id=hpBat' + i + '></span></span>')
          }
          for (var i = 4; i < 8; i++) {
              out('<span style="position:absolute;top:' + yo[i][0] * 30 + ';left:' + yo[i][1] * 30 + ';width:150;height:90;transform:rotate(90deg);" id=hero' + i + '><img src=stop' + pers[i] + '.png width=150 height=90></span>')
              compi(i, 0);
                  out('<span style="position:absolute;bottom:5;right:' + (i - 4) * 50 + ';width:45;height:45;background:url(fon.png);background-size:200px 120px;border:1.5px ridge black;"><img src=' + (prof[pers[i]]) + ' style="position:absolute;top:-8;left:-15;width:70;height:45;"><img src=ubit.png style="position:absolute;top:0;left:0;top:0;width:0;height:40;" id=ubit' + i + '><span style="position:absolute;bottom:0;width:45;height:5;background:black;"></span><span style="position:absolute;bottom:0;width:45;height:5;background:lime;" id=hpBat' + i + '></span></span>')
          }
          out('<span style="position:absolute;top:75;left:100;width:150;height:90;" id=pitom' + 0 + '><img src=polet0.gif width=150 height=90></span>')
          out('<span style="position:absolute;top:-1000;left:0;width:60;height:60;z-index:10000000;opacity:0.8;" id=ultaP' + 0 + '><img src=ulti.png style="width:60;height:60;z-index:10000000;"></span>')
          if (pers.indexOf(13) != -1) {
              out('<span style="position:absolute;top:-1000;left:0;width:60;height:60;z-index:10000000;" id=ultaP' + 1 + '><img src=tor.png style="width:60;height:60;z-index:10000000;"></span>')
          }
          if (pers.indexOf(14) != -1) {
                out('<span style="position:absolute;top:-1000;left:0;width:60;height:60;z-index:10000000;" id=ultaP' + 3 + '><img src=meteor.png style="width:80;height:100;z-index:10000000;"></span>')
            }
          if (pers.indexOf(15) != -1) {
              out('<span style="position:absolute;top:-1000;left:0;width:100;height:100;z-index:10000000;" id=ultaP' + 5 + '><img src=nubik.png style="width:100;height:100;z-index:10000000;"></span>')
          }
          setTimeout(function () {
              document.getElementById('pitom' + 0).innerHTML = '<img src=pit0.gif width=150 height=90>'
              document.getElementById("ultaP" + 0).style.top = 90;
              document.getElementById("ultaP" + 0).style.left = 220;
              letet('ultaP'+0,90,220,90,400,0,0)
              setTimeout(pitP, 1000)
          }, eneP[0])
          //ho=0;
          setTimeout(arteFact, 7000, hod);
          //setTimeout(lose, 5000)
      }
    function arteFact(hod) {
            pitom0.alt="пито";
            if (ARB[hod] == 1) {
                  if (hod > 3) {
                        for (var i = 0; i < 4; i++) {
                            hpB[i]-=25*upgB[pers[hod]]; 
                        }
                    } else {
                      for (var i = 4; i < 8; i++) {
                          hpB[i]-=25*upgB[pers[hod]]; 
                      }
                    }
                  hpB[hod]+=50*upgB[pers[hod]];
              }
            if (ARB[hod] == 2) {
                if (hod < 4) {
                      for (var i = 4; i < 8; i++) {
                          hpB[i]+=37*upgB[pers[hod]]; 
                      }
                  } else {
                    for (var i = 0; i < 4; i++) {
                        hpB[i]+=37*upgB[pers[hod]]; 
                    }
                  }
            }
            if (ARB[hod] == 3) {
                    if (hod > 3) {
                          for (var i = 0; i < 4; i++) {
                              hpB[i]-=37*upgB[pers[hod]]; 
                          }
                      } else {
                        for (var i = 4; i < 8; i++) {
                            hpB[i]-=37*upgB[pers[hod]]; 
                        }
                      }
            }
            if (ARB[hod] == 4) {
                if (hod >= 4) {
                      var IIII = rand(0, 3);
                  } else {
                      var IIII = rand(4, 7);
                  }
                  document.getElementById("hero" + IIII).innerHTML += '<img src=snos.gif style="position:absolute;top:15;left:25;width:100;height:60;" id=snos' + IIII + '>'
                  hpB[IIII] -= 150;
                  setTimeout(snyat2, 1000*upgB[pers[hod]],IIII)
            }
            if (ARB[hod] == 5) {
                for (var i = 0; i < 8; i++) {
                      if (pl[i] != pl[hod]) {
                          document.getElementById("hero" + i).innerHTML = '<img src=stop' + (pers[i] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + i + '>'
                          var DISHA=0;
                            if (GOO[i] == 1) {
                                DISHA=1;
                            }
                            GOO[i] = 1;
                            oglush(i, 0);
                          setTimeout(snyat, 1000, i, DISHA)
                      }
                  }
            }
            if (ARB[hod] == 6) {
                    zasB[hod]+=250*upgB[pers[hod]];
                    setTimeout(offUsil,2000,hod);
              }
            if (ARB[hod] == 7) {
                hpB[hod]+=150*upgB[pers[hod]];
            }
            if (ARB[hod] == 8) {
                hpB[hod]+=75*upgB[pers[hod]];
                if (hod >= 4) {
                    var IIII = rand(0, 3);
                } else {
                    var IIII = rand(4, 7);
                }
                document.getElementById("hero" + IIII).innerHTML += '<img src=snos.gif style="position:absolute;top:15;left:25;width:100;height:60;" id=snos' + IIII + '>'
                hpB[IIII] -= 75*upgB[pers[hod]];
                setTimeout(snyat2, 1000,IIII)
            }
        for (var i = 0; i < 8; i++) {
            if (hpB[i] < 0) {
                hpB[i]=0;
            }
            if (String(pers[i]).indexOf('scelet')==-1) {
                
                  document.getElementById("hpBat" + i).style.width = 45 / (hprIsn[i] / hpB[i]);
              } else {
                  document.getElementById("hpBat" + i).style.width = 45 / (whatHP(pers[i]) / hpB[i]);
              }
        }
        checkHP();
              setTimeout(arteFact, 7000, hod);

    }
    function pitP(rocket,hod) {
        document.getElementById('pitom' + hod).innerHTML = '<img src=polet'+rocket+'.gif width=150 height=90>'
        setTimeout(function () {
            document.getElementById('pitom' + hod).innerHTML = '<img src=pit'+rocket+'.gif width=150 height=90>'
            document.getElementById("ultaP" + hod).style.top = 90;
            document.getElementById("ultaP" + hod).style.left = 220;
            letet('ultaP'+hod,90,220,90,400)
            setTimeout(pitP, 1000, rocket, hod)
            if (crowP[rocket] == 0) {
                for (var i = 0; i < 8; i++) {
                    if (pl[i] != pl[hod]) {
                        if (hpB[i] > 0)hpB[i]-=atB[rocket]*0.5;
                    }
                }
            }
            if (crowP[rocket] == 1) {
                for (var i = 0; i < 8; i++) {
                    if (pl[i] != pl[hod]) {
                        if (hpB[i] > 0)hpB[i]-=atB[rocket]*0.2;
                    } else {
                        if (hpB[i] > 0)hpB[i]+=atB[rocket]*0.2;
                    }
                }
            }
            if (crowP[rocket] == 2) {
                  for (var i = 0; i < 8; i++) {
                      if (pl[i] != pl[hod]) {
                          if (neus[i] == 1) {
                                continue;
                            }
                          document.getElementById("hero" + i).innerHTML = '<img src=stop' + (pers[i] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + i + '>'
                          var DISHA=0;
                            if (GOO[i] == 1) {
                                DISHA=1;
                            }
                            GOO[i] = 1;
                            oglush(i, 0);
                            setTimeout(snyat, 1200, i, DISHA)
                      }
                  }
              }
            checkHP()
        }, eneP[rocket])
    }
  function pitP2(rocket,hod) {
      document.getElementById('pitom' + 1).innerHTML = '<img src=polet'+rocket+'.gif width=150 height=90>'
      setTimeout(function () {
          document.getElementById('pitom' + 1).innerHTML = '<img src=pit'+rocket+'.gif width=150 height=90>'
          document.getElementById("ultaP" + -1).style.top = 90;
          document.getElementById("ultaP" + -1).style.left = 400;
          letet('ultaP'+-1,90,350,90,170);
          setTimeout(pitP2, 1000, rocket, hod)
          if (crowP[rocket] == 0) {
              for (var i = 0; i < 8; i++) {
                  if (pl[i] != pl[hod]) {
                      if (hpB[i] > 0)hpB[i]-=atB[rocket]*0.5;
                  }
              }
          }
          if (crowP[rocket] == 1) {
              for (var i = 0; i < 8; i++) {
                  if (pl[i] != pl[hod]) {
                      if (hpB[i] > 0)hpB[i]-=atB[rocket]*0.2;
                  } else {
                      if (hpB[i] > 0)hpB[i]+=atB[rocket]*0.2;
                  }
              }
          }
          if (crowP[rocket] == 2) {
                for (var i = 0; i < 8; i++) {
                    if (pl[i] != pl[hod]) {
                        if (neus[i] == 1) {
                              continue;
                          }
                        document.getElementById("hero" + i).innerHTML = '<img src=stop' + (pers[i] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + i + '>'
                        var DISHA=0;
                          if (GOO[i] == 1) {
                              DISHA=1;
                          }
                          GOO[i] = 1;
                          oglush(i, 0);
                          setTimeout(snyat, 1000, i, DISHA)
                    }
                }
            }
          checkHP()
      }, eneP[rocket])
  }
    function letet(id,x,y,x2,y2,rot,rotPl) {
        document.getElementById(id).style.transform="rotate("+(rot*rotPl)+"deg)";
        document.getElementById(id).style.top = x;
        document.getElementById(id).style.left = y;
        if (y < y2) {
            y+=1.5;
        }
        else if (y > y2) {
            y-=1.5;
        }
        if (x < x2) {
            x+=1.5;
        }
        else if (x > x2) {
            x-=1.5;
        }
        if (x != x2 || y != y2) {
            setTimeout(letet,10,id,x,y,x2,y2,rot,rotPl+1)
        } else {
            document.getElementById(id).style.top = -1000;
            document.getElementById(id).style.left = 0;
        }
    }
    function compi(hod, w) {
        checkHP();
        if (hod < 4) {
            w=1;
        }
        else {
            w=0;
        }
        //alert(w)
        // ищем ближнего героя
        if (hpB[0] <= 0 && hpB[1] <= 0 && hpB[2] <= 0 && hpB[3] <= 0) {
            for (var i = 0; i < ULTA.length; i++) {
                ULTA[i] = 1;
            }
            lose();
            return 0;
        } else if (hpB[4] <= 0 && hpB[5] <= 0 && hpB[6] <= 0 && hpB[7] <= 0) {
            for (var i = 0; i < ULTA.length; i++) {
                ULTA[i] = 1;
            }
            win();
            return 0;
        }
        if (yo[hod][0] < 0 || yo[hod][1] < 0) {
            return 0;
        }
        if (hpB[hod] <= 0) {
            return 0;
        }
        document.getElementById("hero" + hod).innerHTML = '<img src='+stopB[hod]+'.png width=150 height=90 style="position:absolute;top:0;left:0;">'
        var max = 100000000, maxi = 0, max2 = 1000000005, mini2 = 0;
        
        for (var i = 4 * w; i < 4 * w + 4; i++) {
            if (Math.abs(Math.sqrt((yo[hod][0] - yo[i][0]) ** 2 + (yo[hod][1] - yo[i][1]) ** 2)) < max2) {
                max2 = Math.abs(Math.sqrt((yo[hod][0] - yo[i][0]) ** 2 + (yo[hod][1] - yo[i][1]) ** 2));
                maxi = i;
            }
        }
        var nap = [], nap2 = [];
        var chel = yo[maxi][0], chel2 = yo[maxi][1];
        if (yo[hod][0] < 10) {
            nap[nap.length] = yo[hod][0] + 1
            nap2[nap2.length] = yo[hod][1];
        }
        if (yo[hod][0] >= 0) {
            nap[nap.length] = yo[hod][0] - 1
            nap2[nap2.length] = yo[hod][1]
        }
        if (yo[hod][1] < 40) {
            nap[nap.length] = yo[hod][0]
            nap2[nap2.length] = yo[hod][1] + 1
        }
        if (yo[hod][1] > 0) {
            nap[nap.length] = yo[hod][0]
            nap2[nap2.length] = yo[hod][1] - 1
        }
        //(chel+" , "+chel2)
        for (var i = yo[hod][0] - 1; i < yo[hod][0] + 2; i++) {
            for (var j = yo[hod][1] - 1; j < yo[hod][1] + 2; j++) {
                if (pl[findB(i, j)] != pl[hod] && findB(i, j) != -1 && ((i == yo[hod][0] && j == yo[hod][1] - 1) || (i == yo[hod][0] && j == yo[hod][1] + 1) || (i == yo[hod][0] - 1 && j == yo[hod][1]) || (i == yo[hod][0] + 1 && j == yo[hod][1]))) {

                    udar(findB(i, j), findB(i, j), hod);
                    return 0;
                }
            }
        }
        var IMW = -1;
        if (nap.length > 0) {
            IMW = -1, max = 10000000;
            for (var i = 0; i < nap.length; i++) {
                if (Math.abs(Math.sqrt((chel - nap[i]) ** 2 + (chel2 - nap2[i]) ** 2)) < max && pl[findB(nap[i], nap2[i])] != pl[hod] && (nap[i] != chel || nap2[i] != chel2)) {
                    if (pl[findB(nap[i], nap2[i])] != pl[hod] && findB(nap[i], nap2[i]) != -1) {
                        udar(findB(nap[i], nap2[i]), i, hod);
                        return 0;
                    }
                    max = Math.abs(Math.sqrt((chel - nap[i]) ** 2 + (chel2 - nap2[i]) ** 2));
                    IMW = i;
                }
            }
        }
        if (IMW != -1) {
            cheL[hod] = yo[hod][0], cheL2[hod] = yo[hod][1];
        }
        if (IMW == 0) {
            go(0, hod, w)
        } else if (IMW == 1) {
            go(2, hod, w)
        } else if (IMW == 2) {
            go(3, hod, w)
        } else if (IMW == 3) {
            go(1, hod, w)
        }

    }
    function udar(x, y, hod) {
        checkHP();
        if (GOO[hod] == 1 || yo[hod][0]<0 || hpB[hod]<=0) {
            return 0;
        }
        ULTA[hod] = 0;
        var IM2 = [0, 2, 3, 1]
        document.getElementById("hero" + hod).innerHTML = '<img src='+udarB[hod]+'.gif width=150 height=90 style="position:absolute;top:0;left:0;">'
        document.getElementById("hero" + hod).style.zIndex = yo[hod][0] * 100 + yo[hod][1]
        if (yo[hod][0] < yo[y][0]) {
            // top left
            document.getElementById("hero" + hod).style.transform = "rotate(0deg)"
        }
        if (yo[hod][1] > yo[y][1]) {
            // top left
            document.getElementById("hero" + hod).style.transform = "rotate(90deg)"
        }
        if (yo[hod][0] > yo[y][0]) {
            // top left
            document.getElementById("hero" + hod).style.transform = "rotate(180deg)"
        }
        if (yo[hod][1] < yo[y][1]) {
            // top left
            document.getElementById("hero" + hod).style.transform = "rotate(-90deg)"
        }
        setTimeout(function () {
            if (GOO[hod] == 1 || yo[hod][0]<0) {
                return 0;
            }
            document.getElementById("hero" + hod).innerHTML = '<img src='+ultaB[hod]+'.gif width=150 height=90 style="position:absolute;top:0;left:0;">'

            document.getElementById("hero" + hod).style.zIndex = 10000000;
            ULTA[hod] = 1;
            setTimeout(snosU, dal[pers[hod]] * 500, y, hod)
            setTimeout(udar, dal[pers[hod]] * 1000, x, y, hod)
        }, 6000)
        setTimeout(snos, 200, y, hod);
        checkHP();
    }
    function snyat(i,x) {
        if (x == 1) {
              return 0;
          }
        GOO[i] = 0;

        if (i < 4) {
            compi(i, 0);
        } else {
            compi(i, 1);
        }
    }
    function snyat2(i) {
        document.getElementById("snos" + i).style.width = 0;
    }
    function whatHP(x) {
        if (x == 'scelet') {
            return 1000;
        }
        if (x == 'wscelet') {
              return 3000;
          }
        if (x == 'kscelet') {
            return 7000;
        }
        if (x == 'lscelet') {
            return 15000;
        }
    }
    function snos(y, hod) {
        if (GOO[hod] == 1) {
            return 0;
        }
        if (hpB[hod] <= 0 || hpB[y] <= 0) {
            if (hpB[0] + hpB[1] + hpB[2] + hpB[3] == 0) {
                for (var i = 0; i < ULTA.length; i++) {
                    ULTA[i] = 1;
                }
                lose();
            } else if (hpB[4] + hpB[5] + hpB[6] + hpB[7] == 0) {
                for (var i = 0; i < ULTA.length; i++) {
                    ULTA[i] = 1;
                }
                win();
            }
            return 0;
        }
        hpB[y] -= atB[hod] - zasB[y] / 2;
        if (String(pers[y]).indexOf('scelet')==-1) {
            document.getElementById("hpBat" + y).style.width = 45 / (hprIsn[y] / hpB[y]);
        } else {
            document.getElementById("hpBat" + y).style.width = 45 / (whatHP(pers[y]) / hpB[y]);
        }
        if (hpB[y] <= 0) {
            document.getElementById("ubit" + y).style.width = 45;
            hpB[y] = 0;
            document.getElementById("hpBat" + y).style.width = 0;
            yo[y][0] = -1000;
            document.getElementById("hero" + y).style.top = -1000;
            if (hod < 4) {compi(hod,1);}
            else {compi(hod,0);}
            if (hpB[0] <= 0 && hpB[1] <= 0 && hpB[2] <= 0 && hpB[3] <= 0) {
                for (var i = 0; i < ULTA.length; i++) {
                    ULTA[i] = 1;
                }
                lose();
            } else if (hpB[4] <= 0 && hpB[5] <= 0 && hpB[6] <= 0 && hpB[7] <= 0) {
                for (var i = 0; i < ULTA.length; i++) {
                    ULTA[i] = 1;
                }
                win();
            }
            return 0;
        }
        if (hpB[y] < 2000 && primen[y] == 1) {
            primen[y]=0;
            if (ABR2[y] == 1) {
                hpB[hod]-=100*upgB2[pers[hod]];
                document.getElementById("hero" + hod).innerHTML = '<img src='+stopB[hod]+'.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + hod + '>'
                  var DISHA=0;
                  if (GOO[hod] == 1) {
                      DISHA=1;
                  }
                  GOO[hod] = 1;
                  oglush(hod, 0);
                  setTimeout(snyat, 1000*upgB2[pers[hod]], hod, DISHA);
            }
            if (ABR2[y] == 2) {
                zasB[y]+=300*upgB2[pers[hod]]; 
                setTimeout(offUsil,4000,y);
            }
            if (ABR2[y] == 3) {
                setTimeout(snosU, dal[pers[y]] * 500, hod, y);
            }
        }
        if (ULTA[hod] == 0) {
            if (String(pers[hod]).indexOf('scelet')==-1) {
                setTimeout(snos, V[pers[hod]] * 1000, y, hod)
            } else {
                setTimeout(snos, 1800, y, hod);
            }
        };
    }
    function offUsil(x) {
        checkHP();
        atB[x]=atIsn[x];
        zasB[x]=zasIsn[x];
        neus[x]=0;
    }
    function snosU(y, hod) {
        if (pers[hod] == 0) {
            atB[hod]+=atB[hod]*0.9; 
            zasB[hod]+=zasB[hod]*0.2; 
            setTimeout(offUsil,4000,hod);
        }
        if (pers[hod] == 1) {
            if (hod < 4) {
                for (var i = 0; i < 4; i++) {
                    atB[i]+=atB[i]*0.5; 
                    zasB[i]+=zasB[i]*0.5; 
                    setTimeout(offUsil,2000,i);
                }
            } else {
                for (var i = 4; i < 8; i++) {
                      atB[i]+=atB[i]*0.5; 
                      zasB[i]+=zasB[i]*0.5; 
                      setTimeout(offUsil,2000,i);
                  }
            }
        }
        if (pers[hod] == 2) {
            if (hod >= 4) {
                var IIII = rand(0, 3);
            } else {
                var IIII = rand(4, 7);
            }
            document.getElementById("hero" + IIII).innerHTML += '<img src=snos.gif style="position:absolute;top:15;left:25;width:100;height:60;" id=snos' + IIII + '>'
            if (neus[IIII] == 0)hpB[IIII] -= atB[hod] * 2;
            hpB[hod] += atB[hod];
            setTimeout(snyat2, 1000,IIII)
        }
        if (pers[hod] == 3) {
            hpB[hod]+=atB[hod]*0.5;
            neus[hod]=1;
            setTimeout(offUsil,2000,hod);
        }
        if (pers[hod] == 4) {
            if (hod < 4) {
                var III = rand(4,7);
                if (neus[III] == 0)hpB[III]-=atB[hod]*2.5;
            } else {
                    var III = rand(0,3);
                      if (neus[III] == 0)hpB[III]-=atB[hod]*2.5;
            }
            zasB[hod]+=zasB[hod]*3;
            setTimeout(offUsil,2000,hod);
        }
        if (pers[hod] == 5) {
            if (hod < 4) {
                var III = rand(4,7);
            } else {
                    var III = rand(0,3);

            }
            if (neus[III] == 0)hpB[III]-=atB[hod]*2.5;
        }
        if (pers[hod] == 6) {
            if (hod < 4) {
                  for (var i = 0; i < 4; i++) {
                      atB[i]+=atB[i]*0.5;  
                      setTimeout(offUsil,2000,i);
                  }
              } else {
                  for (var i = 4; i < 8; i++) {
                        atB[i]+=atB[i]*0.5; 
                        setTimeout(offUsil,2000,i);
                    }
              }
              if (hod < 4) {
                  var III = rand(4,7);
                    if (neus[III] == 0)hpB[III]-=atB[hod]*0.45;
              } else {
                  var III = rand(0,3);
                    if (neus[III] == 0)hpB[III]-=atB[hod]*0.45;
              }
        }
        if (pers[hod] == 7) {
            // возраждение
            hpB[hod]+=0.25*hprIsn[hod];
        }
        if (pers[hod] == 8) {
            for (var i = 0; i < 8; i++) {
                if (pl[i] != pl[hod]) {
                    if (neus[i] == 1) {
                        continue;
                    }
                    document.getElementById("hero" + i).innerHTML = '<img src=stop' + (pers[i] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + i + '>'
                    hpB[i] -= atB[hod] * 0.15;
                    var DISHA=0;
                    if (GOO[i] == 1) {
                        DISHA=1;
                    }
                    GOO[i] = 1;
                    oglush(i, 0);
                    setTimeout(snyat, 1000, i, DISHA)
                }
            }
        }
        if (pers[hod] == 9) {
            if (hod < 4) {
                var III = rand(4,7);
                  if (neus[III] == 0)hpB[III]-=atB[hod]*5;
            } else {
                var III = rand(0,3);
                  if (neus[III] == 0)hpB[III]-=atB[hod]*5;
            }
            hpB[hod]+=atB[hod]*5;
        }
        if (pers[hod] == 10) {
            for (var i = 0; i < 8; i++) {
                if (pl[i] != pl[hod]) {
                    if (neus[i] == 1) {
                          continue;
                      }
                    document.getElementById("hero" + i).innerHTML = '<img src=stop' + (pers[i] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + i + '>'
                    var DISHA=0;
                      if (GOO[i] == 1) {
                          DISHA=1;
                      }
                      GOO[i] = 1;
                      oglush(i, 0);
                      setTimeout(snyat, 1200, i, DISHA)
                }
            }
        }
        if (pers[hod] == 11) {
            if (hod < 4) {
                  for (var i = 0; i < 4; i++) {
                      if (hpB[i] > 0)
                          hpB[i]+=atB[hod]*0.25;
                  }
              } else {
                  for (var i = 4; i < 8; i++) {
                      if (hpB[i] > 0)
                          hpB[i]+=atB[hod]*0.25;
                  }
            }
            if (hod < 4) {
                    for (var i = 4; i < 8; i++) {
                        if (neus[i]==0)hpB[i]-=atB[hod]*0.25;
                    }
                } else {
                    for (var i = 0; i < 4; i++) {
                        if (neus[i]==0)hpB[i]-=atB[hod]*0.25;
                    }
            }
        }
        if (pers[hod] == 12) {
            for (var i = 0; i < 8; i++) {
                if (pl[hod] == pl[i] && hpB[i]<=0 && pers[i] > -1) {
                    hpB[i]=hprIsn[i]*0.3;
                    yo[i][0]=2;
                    yo[i][1]=2;
                    document.getElementById("hero" + i).style.top=yo[i][0]*30;
                    document.getElementById("hero" + i).style.left=yo[i][1]*30;
                    document.getElementById("ubit" + i).style.width = 0;
                    if (hod < 4) {
                        compi(i,1);
                    } else {
                        compi(i,0);
                    }
                    return 0;
                }
            }
            if (hod >= 4) {
                var IIII = rand(0, 3);
            } else {
                var IIII = rand(4, 7);
            }
            if (neus[IIII] == 1) {
                  return 0;
              }
            document.getElementById("hero" + IIII).innerHTML = '<img src=stop' + (pers[IIII] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + IIII + '>'
            var DISHA=0;
              if (GOO[IIII] == 1) {
                  DISHA=1;
              }
              GOO[IIII] = 1;
              oglush(IIII, 0);
              setTimeout(snyat, 3000, IIII, DISHA)
        }
        if (pers[hod] == 13) {
            if (hod < 4) {
                      for (var i = 4; i < 8; i++) {
                          if (neus[i]==0)hpB[i]-=atB[hod]*0.55;
                      }
                  } else {
                      for (var i = 0; i < 4; i++) {
                          if (neus[i]==0)hpB[i]-=atB[hod]*0.55;
                      }
              }
            document.getElementById("ultaP" + 1).style.top = 90;
              document.getElementById("ultaP" + 1).style.left = 220;
              letet('ultaP'+1,90,220,90,400,8,0)
        }
        if (pers[hod] == 14) {
            setTimeout(function() {
                hpB[hod]+=atB[hod]*0.5;
                for (var i = 0; i < 8; i++) {
                      if (pl[i] != pl[hod]) {
                          if (neus[i] == 1) {
                                continue;
                            }
                          document.getElementById("hero" + i).innerHTML = '<img src=stop' + (pers[i] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + i + '>'
                          var DISHA=0;
                            if (GOO[i] == 1) {
                                DISHA=1;
                            }
                            GOO[i] = 1;
                            oglush(i, 0);
                            setTimeout(snyat, 1000, i, DISHA)
                      }
                  }
            },800)
            document.getElementById("ultaP" + 3).style.top = 70;
            document.getElementById("ultaP" + 3).style.left = 220;
            letet('ultaP'+3,70,220,70,400,0,0)
        }
        if (pers[hod] == 15) {
            setTimeout(function() {
                  for (var i = 0; i < 8; i++) {
                        if (pl[i] != pl[hod]) {
                            if (neus[i]==0)hpB[i]-=atB[hod]*1.4;
                        } else {
                            if (hpB[i] > 0)
                              hpB[i]+=atB[hod]*1.2;
                        }
                    }
              },800)
            document.getElementById("ultaP" + 5).style.top = 90;
            document.getElementById("ultaP" + 5).style.left = 220;
            letet('ultaP'+5,90,220,90,400,11,0)
        }
        if (pers[hod] == 16) {
              hpB[hod]+=0.72*atB[hod];
            if (hod < 4) {
            hpB[rand(4,7)]-=1.5*atB[hod];
            } else {
                hpB[rand(0,3)]-=1.5*atB[hod];
            }
          }
        if (pers[hod] == 17) {
            if (hod < 4) {
                var IIII = rand(4,7);
            } else {
                var IIII = rand(0,3);
            }
            pl[IIII]=pl[hod];
            setTimeout(function() {
                if (pl[IIII] == 0) {
                    pl[IIII]=1;
                } else {
                    pl[IIII]=0;
                }
            }, 4000)
        }
        if (pers[hod] == 18) {
            if (hod >= 4) {
                var IIII = rand(0, 3);
            } else {
                var IIII = rand(4, 7);
            }
            document.getElementById("hero" + IIII).innerHTML = '<img src=stop' + (pers[IIII] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + IIII + '>'
            var DISHA=0;
              if (GOO[IIII] == 1) {
                  DISHA=1;
              }
              GOO[IIII] = 1;
              oglush(IIII, 0);
              setTimeout(snyat, 5000, IIII, DISHA)
        }
        if (pers[hod] == 19) {
            for (var i = 0; i < 8; i++) {
                if (pl[hod] == pl[i]) {
                    if (hpB[i] > 0)
                        hpB[i]+=atB[hod]*0.7;
                }
            }
        }
        if (pers[hod] == 20) {
            if (hod < 4) {
            var AS=rand(0,3)
            } else {
                var AS = rand(4,7)
            }
              document.getElementById("hero" + AS).innerHTML = '<img src=ulta' + (pers[AS] + 1) + '.gif width=150 height=90 style="position:absolute;top:0;left:0;">'

              document.getElementById("hero" + AS).style.zIndex = 10000000;
              ULTA[AS] = 1;
              setTimeout(snosU, dal[pers[AS]] * 500, y, hod)
        }
        if (pers[hod] == 21) {
            for (var i = 0; i < 8; i++) {
                if (i != hod) {
                    if (pl[i] == pl[hod]) {
                        hpB[i]-=atB[hod]*0.5;
                    } else {
                        hpB[i]-=atB[hod];
                    }
                }
            }
        }
        if (pers[hod] == 22) {
            if (hod >= 4) {
                var IIII = rand(0, 3);
            } else {
                var IIII = rand(4, 7);
            }
            document.getElementById("hero" + IIII).innerHTML += '<img src=molni.gif style="position:absolute;top:15;left:25;width:100;height:60;" id=snos' + IIII + '>'
            if (neus[IIII] == 0)hpB[IIII] -= atB[hod];
            hpB[hod] += atB[hod];
            for (var i = yo[IIII][0]-1; i < yo[IIII][0]+2; i++) {
                for (var j = yo[IIII][1]-1; j < yo[IIII][1]+2; j++) {
                    if (i != yo[IIII][0] || j != yo[IIII][1]) {
                        document.getElementById("hero" + i).innerHTML = '<img src=stop' + (pers[i] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + i + '>'
                        var DISHA=0;
                          if (GOO[i] == 1) {
                              DISHA=1;
                          }
                          GOO[i] = 1;
                          oglush(i, 0);
                          setTimeout(snyat, 2000, i, DISHA)
                    }
                }
            }
            setTimeout(snyat2, 1000,IIII)
        }
        if (pers[hod] == 23) {
            for (var  i = 0; i < 8; i++) {
                if (pl[i] != pl[hod]) {
                    document.getElementById("hero" + i).innerHTML += '<img src=molni.gif style="position:absolute;top:15;left:25;width:100;height:60;" id=snos' + i + '>'
                    if (neus[i] == 0)hpB[i] -= atB[i] * 0.5;
                    setTimeout(snyat2, 800,i)
                }
            }
        }
        if (pers[hod] == 24) {
            if (rand(1,3) == 2) {
                neus[hod]=1;
                setTimeout(offUsil, 3500, hod);
            } else if (rand(1,2) == 1) {
                if (hod >= 4) {
                    var IIII = rand(0, 3);
                } else {
                    var IIII = rand(4, 7);
                }
                document.getElementById("hero" + IIII).innerHTML += '<img src=molni.gif style="position:absolute;top:15;left:25;width:100;height:60;" id=snos' + IIII + '>'
                if (neus[IIII] == 0)hpB[IIII] -= atB[hod] * 2.4
                setTimeout(snyat2, 1000,IIII)
            } else {
                hpB[hod]+=hprIsn[hod]*0.30;
            }
        }
        if (pers[hod] == 25) {
            for (var i = 0; i < 8; i++) {
                if (i != hod) {
                    if (neus[i] == 1) {
                          continue;
                      }
                    document.getElementById("hero" + i).innerHTML = '<img src=stop' + (pers[i] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;">'
                    var DISHA=0;
                      if (GOO[i] == 1) {
                          DISHA=1;
                      }
                      GOO[i] = 1;
                      setTimeout(snyat, 4000, i, DISHA)
                }
            }
            atB[hod]+=atB[hod];
            setTimeout(offUsil,3000,hod);
        }
        if (pers[hod] == 26) {
            for (var i = 0; i < 8; i++) {
                if (pl[i] != pl[hod]) {
                    if (neus[i] == 1) {
                          continue;
                      }
                    zasB[i]=0;
                    setTimeout(offUsil,2500,i);
                }
            }
        }
        if (pers[hod] == 30) {
            for (var i = 0; i < 8; i++) {
                    if (neus[i] == 1) {
                          continue;
                      }
                    document.getElementById("hero" + i).innerHTML = '<img src=stop' + (pers[i] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + i + '>'
                    var DISHA=0;
                      if (GOO[i] == 1) {
                          DISHA=1;
                      }
                      GOO[i] = 1;
                      oglush(i, 0);
                      setTimeout(snyat, 1000, i, DISHA)
                }
            if (rand(1,10) == 3) {
                for (var i = 0; i > 8; i++) {
                    if (pl[hod] != pl[i]) {
                        hpB[i]=0;
                        yo[y][0] = -1000;
                        document.getElementById("hero" + y).style.top = -1000;
                        //
                        if (hod < 4) {compi(hod,1);  }             else {compi(hod,0);};
                        return 0;
                        break;
                    }
                }
            }
        }
        if (pers[hod] == 32) {
            if (hod < 4) {
                var IIII = rand(4,7);
            } else {
                var IIII = rand(0,3);
            }
            setInterval(function(){
                hpB[IIII]-=atB[hod]*0.2;
                for (var i = 0; i < 8; i++) {
                    if (hpB[i] < 0) {
                        hpB[i]=0;
                    }
                    if (String(pers[i]).indexOf('scelet')==-1) {
                        
                          document.getElementById("hpBat" + i).style.width = 45 / (hprIsn[i] / hpB[i]);
                      } else {
                          document.getElementById("hpBat" + i).style.width = 45 / (whatHP(pers[i]) / hpB[i]);
                      }
                }
                if (hpB[IIII] <= 0) {
                    yo[IIII][0] = -1000;
                    document.getElementById("hero" + IIII).style.top = -1000;
                    //
                    if (IIII < 4) {compi(hod,0);  }             else {compi(hod,1);};
                    return 0;
                }
                if (hpB[0] <= 0 && hpB[1] <= 0 && hpB[2] <= 0 && hpB[3] <= 0) {
                    for (var i = 0; i < ULTA.length; i++) {
                        ULTA[i] = 1;
                    }
                    lose();
                } 
                else if (hpB[4] <= 0 && hpB[5] <= 0 && hpB[6] <= 0 && hpB[7] <= 0) {
                    for (var i = 0; i < ULTA.length; i++) {
                        ULTA[i] = 1;
                    }
                    win();
                }
            },1000)
        }
        if (pers[hod] == 33) {
            if (hod < 4) {
                var IIII = rand(4,7);
            } else {
                var IIII = rand(0,3);
            }
            hpB[hod]+=atB[hod]*2.5;
            if (neus[IIII] == 0) {
            document.getElementById("hero" + IIII).innerHTML = '<img src=stop' + (pers[IIII] + 1) + '.png width=150 height=90 style="position:absolute;top:0;left:0;"><img src=glush.png style="position:absolute;top:15;left:25;width:100;height:60;" id=glush' + IIII + '>'
            var DISHA=0;
              if (GOO[IIII] == 1) {
                  DISHA=1;
              }
              GOO[IIII] = 1;
              oglush(IIII, 0);
              setTimeout(snyat, 2000, IIII, DISHA)
                hpB[IIII]-=atB[hod]*1.5
            }
        }
        if (pers[hod] == 37) {
            hpB[hod]+=atB[hod]*0.5;
            hpB[y]-=atB[hod]*0.5;
            for (var i = 0; i < 8; i++) {
                if (hpB[i] < 0) {
                    hpB[i]=0;
                    document.getElementById("ubit" + i).style.width = 45;
                }
                if (String(pers[i]).indexOf('scelet')==-1) {
                    
                      document.getElementById("hpBat" + i).style.width = 45 / (hprIsn[i] / hpB[i]);
                  } else {
                      document.getElementById("hpBat" + i).style.width = 45 / (whatHP(pers[i]) / hpB[i]);
                  }
            }
            setTimeout(function() {
                hpB[y]-=atB[hod]*0.5;
                for (var i = 0; i < 8; i++) {
                    if (hpB[i] < 0) {
                        hpB[i]=0;
                        document.getElementById("ubit" + i).style.width = 45;
                    }
                    if (String(pers[i]).indexOf('scelet')==-1) {
                        
                          document.getElementById("hpBat" + i).style.width = 45 / (hprIsn[i] / hpB[i]);
                      } else {
                          document.getElementById("hpBat" + i).style.width = 45 / (whatHP(pers[i]) / hpB[i]);
                      }
                }
            }, 500)
        }
        if (pers[hod] == 'kscelet') {
            hpB[hod]+=atB[hod]*2;
        }
        checkHP();
        for (var i = 0; i < 8; i++) {
            if (hpB[i] < 0) {
                hpB[i]=0;
                document.getElementById("ubit" + i).style.width = 45;
            }
            if (String(pers[i]).indexOf('scelet')==-1) {
                
                  document.getElementById("hpBat" + i).style.width = 45 / (hprIsn[i] / hpB[i]);
              } else {
                  document.getElementById("hpBat" + i).style.width = 45 / (whatHP(pers[i]) / hpB[i]);
              }
        }
        if (hpB[y] <= 0) {
            document.getElementById("ubit" + y).style.width = 45;
            yo[y][0] = -1000;
            document.getElementById("hero" + y).style.top = -1000;
            //
            if (hod < 4) {compi(hod,1);  }             else {compi(hod,0);};
            return 0;
        }
        if (hpB[0] <= 0 && hpB[1] <= 0 && hpB[2] <= 0 && hpB[3] <= 0) {
            for (var i = 0; i < ULTA.length; i++) {
                ULTA[i] = 1;
            }
            lose();
        } 
        else if (hpB[4] <= 0 && hpB[5] <= 0 && hpB[6] <= 0 && hpB[7] <= 0) {
            for (var i = 0; i < ULTA.length; i++) {
                ULTA[i] = 1;
            }
            win();
        }

    }
    function oglush(id, x) {
        try {
            document.getElementById("glush" + id).style.transform = "rotate(" + x + "deg)";
            setTimeout(oglush, 50, id, x + 3)
        } catch { }
    }
    function go(x, hod, w) {
        if (x == 0) {
            // top left
            document.getElementById("hero" + hod).style.transform = "rotate(0deg)"
            yo[hod][0]++;

            lets(1, 0, 0, hod, w)
        }
        if (x == 1) {
            // top left
            document.getElementById("hero" + hod).style.transform = "rotate(90deg)"
            yo[hod][1]--;
            lets(0, -1, 0, hod, w)
        }
        if (x == 2) {
            // top left
            document.getElementById("hero" + hod).style.transform = "rotate(180deg)"
            yo[hod][0]--;
            lets(-1, 0, 0, hod, w)
        }
        if (x == 3) {
            // top left
            document.getElementById("hero" + hod).style.transform = "rotate(-90deg)"
            yo[hod][1]++;
            lets(0, 1, 0, hod, w)
        }
        document.getElementById("hero" + hod).style.zIndex = yo[hod][0] * 100 + yo[hod][1]
    }
    function lets(x, y, c, hod, w) {
        checkHP();
        GOO[hod] = 1;
        document.getElementById("hero" + hod).style.top = (yo[hod][0] - x) * 35 - 14 + tor + x * (c + 1);
        document.getElementById("hero" + hod).style.left = (yo[hod][1] - y) * 35 - 58 + left + y * (c + 1);
        if (c < 34) {
            //if (c % 2 == 0) {
            setTimeout(lets, 50, x, y, c + 1, hod, w)
            //} else {
            //lets(x, y, c+1, hod)
            //}
        } else {
            //document.getElementById("hero" + hod).style.top = (yo[hod][0]) * 35 + tor;
             // document.getElementById("hero" + hod).style.left = (yo[hod][1]) * 35 + left;
            GOO[hod] = 0;
            compi(hod, w)
        }
    }
    function lose() {
        winMus.currentTime = 0.0;
          menuMus.pause();
            batMus.pause();
        loseMus.play()

        //document.body.innerHTML='';
        //fon();
        try {
            winner.style.left = 272.2;
            return 0;
        } catch { }
        scren.innerHTML = '';

        if (teef==1)out('<img src=pole.png width=100% height=100% style="position:fixed;top:0;left:0;">')
        if (teef==2)out('<img src=pole4.png width=100% height=100% style="position:fixed;top:0;left:0;">')
          if (teef==4)out('<img src=pole2.png width=100% height=100% style="position:fixed;top:0;left:0;">')
        if (teef==5) out('<img src=fon3.png width=100% height=100% style="position:fixed;top:0;left:0;">')
        out('<img src=flag.png style="position:absolute;top:0;left:20;width:50;height:250;">')
        out('<img src=flag.png style="position:absolute;top:0;right:20;width:50;height:250;">')
        out('<img src=lose.gif style="position:absolute;top:95;left:230;width:150;height:80;" id=winner2>')
        out('<b style="position:absolute;top:-1000;left:272.2;text-align:center;font-size:30;background:grey;border-radius:2px;text-shadow: 1px 2px 2px gray;border:1px ridge black;color:white;width:65;height:70;" id=winner></b>')
        loserCheck(95);
        if (teef == 2) {
                bull -= 2;
                sezon +=3;
          }
          if (teef == 4) {
              bull -= 3;
              sezon += 5;
          }
          if (teef==1) {
                bull -= 3;
                sezon += 5;
              rang[crow[0]]++;
              rang[crow[1]]++;
              rang[crow[2]]++;
              rang[crow[3]]++;
          }
        if (teef==5) {
            bull-=3;
        }
    }
    function win() {

        winMus.currentTime = 0.0;
        menuMus.pause();
          batMus.pause();
        winMus.play();
        document.body.style.overflow = '';
        //document.body.innerHTML='';
        //fon();
        try {
            winner.style.left = 272.2;
            return 0;
        } catch { }
        scren.innerHTML = '';

        if (teef==1||teef==-1)out('<img src=pole.png width=100% height=100% style="position:fixed;top:0;left:0;">')
        if (teef==2)out('<img src=pole4.png width=100% height=100% style="position:fixed;top:0;left:0;">')
        if (teef==4)out('<img src=pole2.png width=100% height=100% style="position:fixed;top:0;left:0;">')
        if (teef==5)out('<img src=fon3.png width=100% height=100% style="position:fixed;top:0;left:0;">')
        out('<img src=flag.png style="position:absolute;top:0;left:20;width:50;height:250;">')
        out('<img src=flag.png style="position:absolute;top:0;right:20;width:50;height:250;">')
        out('<img src=win.gif style="position:absolute;top:95;left:230;width:150;height:80;" id=winner2>')
        out('<b style="position:absolute;top:-1000;left:272.2;text-align:center;font-size:30;background:grey;border-radius:2px;text-shadow: 1px 2px 2px gray;border:1px ridge black;color:white;width:65;height:70;" id=winner></b>')
        winnerCheck(95);
        if (teef == 2) {
            mony += 5;
              bull += 5;
              sezon += 8;
        }
        if (teef == 4) {
            vol++;
            mony += 10;
            bull += 10;
            sezon += 15;
        }
        if (teef == 5) {
            mony+= 15;
            bull+=10;
            sezon+=10;
        }
        if (teef==1) {
            mony += 10;
              bull += 10;
              sezon += 15;
            rang[crow[0]]++;
            rang[crow[1]]++;
            rang[crow[2]]++;
            rang[crow[3]]++;
        }
    }
    function winnerCheck(x) {
        winner2.style.top = x;
        if (x == 30) {
            winner.style.top = 130;
            if (teef==1||teef==4) {
                winner.innerHTML = '<span style="font-size:12;"><img src=cup.png width=12 height=12> + 10<br><img src=mony.png width=12 height=12> + 10<br><img src=sezon.png width=12 height=12> + 15</span></br><button onclick=menu() style="background:url(fon.png);background-size:80px 44px">в меню</button></br>'
            }
            if (teef==-1) {
                winner.innerHTML = '<span style="font-size:12;"><img src=cup.png width=12 height=12> + 0<br><img src=mony.png width=12 height=12> + 0<br><img src=sezon.png width=12 height=12> + 0</span></br><button onclick=menu() style="background:url(fon.png);background-size:80px 44px">в меню</button></br>'
                teef=1;
            }
            if (teef==2) {
                  winner.innerHTML = '<span style="font-size:12;"><img src=cup.png width=12 height=12> + 5<br><img src=mony.png width=12 height=12> + 5<br><img src=sezon.png width=12 height=12> + 8</span></br><button onclick=menu() style="background:url(fon.png);background-size:80px 44px">в меню</button></br>'

              }
            if (teef==5) {
                winner.innerHTML = '<span style="font-size:12;"><img src=cup.png width=12 height=12> + 10<br><img src=mony.png width=12 height=12> + 15<br><img src=sezon.png width=12 height=12> + 10</span></br><button onclick=menu() style="background:url(fon.png);background-size:80px 44px">в меню</button></br>'
            }
        }
        else setTimeout(winnerCheck, 20, x - 1)
    }
    function loserCheck(x) {
        winner2.style.top = x;
        if (x == 30) {
            winner.style.top = 130;
            if (teef==1||teef==4) {
                winner.innerHTML = '<span style="font-size:12;"><img src=cup.png width=12 height=12> - 3<br><img src=mony.png width=12 height=12> + 0<br><img src=sezon.png width=12 height=12> + 5</span></br><button onclick=menu() style="background:url(fon.png);background-size:80px 44px">в меню</button></br>'
            } else if (teef==2) {
                winner.innerHTML = '<span style="font-size:12;"><img src=cup.png width=12 height=12> - 2<br><img src=mony.png width=12 height=12> + 0<br><img src=sezon.png width=12 height=12> + 3</span></br><button onclick=menu() style="background:url(fon.png);background-size:80px 44px">в меню</button></br>'
            } else if (teef==-1) {
                winner.innerHTML = '<span style="font-size:12;"><img src=cup.png width=12 height=12> + 0<br><img src=mony.png width=12 height=12> + 0<br><img src=sezon.png width=12 height=12> + 0</span></br><button onclick=menu() style="background:url(fon.png);background-size:80px 44px">в меню</button></br>'
                teef=1;
            } else if (teef == 5){
                winner.innerHTML = '<span style="font-size:12;"><img src=cup.png width=12 height=12> - 3<br><img src=mony.png width=12 height=12> + 0<br><img src=sezon.png width=12 height=12> + 0</span></br><button onclick=menu() style="background:url(fon.png);background-size:80px 44px">в меню</button></br>'
            }
        }
        else setTimeout(loserCheck, 20, x - 1)
    }
  function checkHP() {
      for (var i = 0; i < 8; i++) {
          if (hpB[i] > hprIsn[i]) {
              hpB[i]=hprIsn[i];
          }
          if (!hpB[i]) {
              hpB[i]=0;
          }
          if (hpB[i] <= 0) {
              hpB[i]=0;
              if (pers[i] == 37 && stopB[i] == 'stop38') {
                  hpB[i]=hprIsn[i]/2;
                  atB[i]=atIsn[i]/2;
                  yo[i][0]=3;
                  yo[i][1]=4;
                  stopB[i]='stop38S';
                  udarB[i]='ulta38S';
                  ultaB[i]='ulta38S';
                  V[pers[i]]/=4;
                  document.getElementById("ubit"+i).style.width=0;
                  if (i < 4){compi(i, 0);}
                  else {
                      compi(i, 1);
                  }
              } else if (pers[i] == 37 && V[pers[i]] != 2.3) {
                  V[pers[i]]*=4;
                }
          }
      }
  }
  function scroll(t) {

  if ((parseInt(window.pageXOffset) == JON && parseInt(window.pageYOffset) == JONK) || t == 0) {

  setTimeout(scroll, 10, t + 1);
  }
  window.scrollTo(JON, JONK);
  }