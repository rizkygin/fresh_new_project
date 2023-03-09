@extends('layouts.app') @section('header')
<style>
    img {
        width: 85px;
        height: 85px;
        
    }
    .pr{
        border-radius: 50%;
    }
    .img2 {
        width: 300px;
        height: 425px;
        border-radius: 3mm;
        display: flex;
        top: 50%;

    }
    .card3 {
        width: 300px;
        height: 400px;
        border-radius: 3mm;
    }


</style>


<div class="cover">
    <div class="cover-layer">
        <div class="container web-portion">
            <div class="row top-det">
                <div class="col-md-4">
                    <div class="profil-det-img d-flex">
                       <div class="dp">
                        <img class="pr" src="{{asset('profile/pexels-ian-turnell-709552.jpg')}}">
                       </div> 
                       <div class="pd">
                           <h2>Alexander Pierce.Sos.</h2>
                            <p>Web Designer</p>
                       </div>
                        
                    </div>
                </div>
                <div class="col-md-4 eml-mob">
                    <ul>
                        <li><i class="fas fa-envelope"></i> joneysmith@gmail.com</li>
                        <li><i class="fas fa-phone-square"></i> +123 234 234</li>
                    </ul>
                </div>
                <div class="col-md-4 d-flex map-mark">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>First Floor,Vincent Plaza, Kuzhithurai, Marthandam </p>
                </div>
            </div>
            <div class="row top-det">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                   <li class="nav-item">
                    
                     <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Document</a>
                   </li>
                   
                 </ul>
                 <div class="tab-content" id="myTabContent" style="width: 100%">
                   <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                       <div class="row no-margin home-det">
                        
                           <div class="col-md-4 big-img">
                            <br>
                              <img class="img2" src="{{asset('profile/pexels-simon-berger-1323550.jpg')}}" > 
                           </div>
                        
                           <div class="col-md-8 home-dat">
                             <br>
                               <div class="detal-jumbo">
                                   <h3>Alexander Pierce</h3>
                               
                               </div>
                               <div class="links">
                               <div class="row ">
                                   
                               </div>
                           </div>
                           <div class="jumbo-address">
                              <div class="row no-margin">
                                       <div class="col-lg-6 no-padding">
                                   
                                       <table class="addrss-list">
                                           <tbody><tr>
                                               <th>Status</th>
                                               <td>:  bekerja</td>
                                           </tr>
                                           <tr>
                                               <th>Gander</th>
                                               <td>:  male</td>
                                           </tr>
                                           <tr>
                                               <th>Conntry</th>
                                               <td>:  indonesia</td>
                                           </tr>
                                           <tr>
                                            <th>Report Date</th>
                                            <td>:  10-1-2023</td>
                                        </tr>
                                       </tbody></table>
                                 
                               </div>
                             
                              </div>
                          
                           </div>
                           </div>
                       </div>
                       
                   </div>
                   <div class="tab-pane fade profile-tab" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                       <div class="profile-desic">
                           <div class="sec-title">
                             <br>
                                <i class="bi bi-box-seam">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                                      <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                                    </svg>
                                </i>
                               <h3>Letters</h3>
                           </div>
                           <div class="row service-ro no-margin">
                               <div class="col-lg- col-md-4 singe-servic">    
                                     <i class="bi bi-person-vcard">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                                            <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
                                            <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
                                          </svg>
                                     </i>
                                       <h4>Id Card :</h4>
                                       <div class="col-md-1 big-img"
                                        width="50" heigh="50">
                                       <img class="card3" src="{{asset('profile/pexels-ian-turnell-709552.jpg')}}">
                                       </div>
                               </div>
                               <div class="col-lg-4 col-md-6 singe-servic">    
                                    <i class="bi bi-award">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                                            <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                        </svg>
                                    </i>
                                       <h4>Certificate :</h4>
                                       <div class="col-md-9 big-img">
                                        <img class="card3" src="{{asset('profile/pexels-simon-berger-1323550.jpg')}}" alt=""> 
                                       </div>
                               </div>
                               <div class="col-lg-4 col-md-6 singe-servic">   
                                    <i class="bi bi-file-earmark-person">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                                            <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5v2z"/>
                                          </svg>
                                    </i>
                                       <h4>Cv :</h4>
                                       <div class="col-md-1 big-img">
                                        <img class="card3" src="{{asset('profile/pexels-simon-berger-1323550.jpg')}}" alt=""> 
                                       </div>
                               </div>
                               <div class="col-lg-4 col-md-6 singe-servic">   
                                <br> 
                                <i class="bi bi-file-earmark-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                        <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                      </svg>
                                </i>
                                   <h4>Application Letter :</h4>
                                   <div class="col-md-9 big-img">
                                    <img class="card3" src="{{asset('profile/pexels-simon-berger-1323550.jpg')}}" alt=""> 
                                   </div>
                                </div>
                                <div class="col-lg-4 col-md-6 singe-servic">    
                                    <br>
                                    <i class="bi bi-person-badge">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                        <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                      </svg>
                                    </i>
                                       <h4>Polici Certificate :</h4>
                                       <div class="col-md-1 big-img">
                                        <img class="card3" src="{{asset('profile/pexels-simon-berger-1323550.jpg')}}" alt=""> 
                                       </div>
                               </div>
                               <div class="col-lg-4 col-md-6 singe-servic">  
                                <br>  
                                <i class="bi bi-file-person">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
                                        <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
                                        <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                      </svg>
                                </i>
                                   <h4>Biografi :</h4>
                                   <div class="col-md-1 big-img">
                                    <img class="card3" src="{{asset('profile/llllll.pn')}}" alt=""> 
                                   </div>
                           </div>
                           </div>
                       
                   </div>
                  
                        
                                        
                                   </div>
                               </div>
                           </div>
                           
                       </div>
                   </div>
                 </div>
            </div>
        </div>
    </div>

@endsection @section('content') @endsection