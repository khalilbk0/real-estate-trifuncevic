import React, { useState, useEffect } from 'react';
import Image from 'next/image';
import axios from 'axios';  
const BuildingPage = () => {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetchData(); 
  }, []);

  const fetchData = async () => {
    const response = await axios.get('https://jsonplaceholder.typicode.com/posts');
    const data = await response;
    setData(data.data);
    console.log(data.data)
  };
 
  return (
   <>
  <div class="building-section section">
      <div class="container">
        <div class="build-wrap">
          <div class="heading-img">
            <h2>VIDOVDANSKA (NOVA)</h2>
            <Image src="/assets/ap24.jpg" alt="building" width={500} height={500} />

          </div>
          <div class="text-link">
            <p class="des">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a class="play" style={{textDecoration:'none', color:'white'}} href="youtube.com">
            <Image src="/assets/play-btn.png" alt="play button" width={60} height={60} />
              <h2>VIDEO PREZENTACIJA</h2>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="ad-cards section">
      <div class="container">
        <div class="card-wrapper">
          {
             data.map(el => {
              return(
                <div class="card">
                <img src="/assets/ex1.png" alt="card image" class="cardImg"/>
                <div class="onSale c-info">NA PRODAJU</div>
                <div class="squarefeet c-info">KVADRATURA: 60 m2</div>
                <div class="floors c-info">ETAŽE: PRIZEMLJE, 1, 2</div>
                <div class="mark c-info">{el.title}</div>
              </div>
              )
             })
          }
        
 
        </div>
      </div>
    </div>
   </>
  );
};

export default BuildingPage;
