import React, { useState, useEffect } from 'react';
import Image from 'next/image';
import axios from 'axios';   
import { useRouter } from 'next/router'
import Pagination from '@/components/pagination';
import NavbarComponent from '@/components/navbar';
const BuildingPage = ({params}) => {
  const router = useRouter()
  
 

  const nextPage = () => {
      
    setPage(Page+1)
    router.push(
      {
      pathname:'/building' , 
      query:{
        id:Building.id , 
        page:Page+1
      }
    }) 
   }



  const prevPage = () => {
      
    setPage(Page-1)
    router.push(
      {
      pathname:'/building' , 
      query:{
        id:Building.id , 
        page:Page
      }
    }) 
   }
  const [Building, setBuilding] = useState([]);
  const [Appartments, setAppartments] = useState([])
  
  const [Page, setPage] = useState(1)
  useEffect(() => {

    console.log(router.query)

      const { id } = router.query;
      if(router.isReady){
        if(router.query.page == undefined){
          router.push({
            pathname:'/building' , 
            query:{
              id:id , 
              page:Page
            }
          })
        }
 
    const postsPerPage = 10
    const startIndex = (Page - 1) * postsPerPage
    const endIndex = Page * postsPerPage
      axios.get('https://testing.tvikonekretnine.com/api/buildings.php?id='+id).then((res) => {
    
       res.data.map((el,key) => {
        if(el[0] == id ){
          setBuilding(el)
        }
       }) 
      } )
 
    axios.get('https://testing.tvikonekretnine.com/api/appartmentById.php?id='+id).then((res) => {
        console.log(res.data)
        setAppartments(res.data)
        console.log(Appartments)
       } )  
  
   }  
   
  }, [router.isReady])

 
   return (
   <> 
   
   <NavbarComponent/>
   <div className="building-section section">
      <div className="container">
        <div className="build-wrap">
          <div className="heading-img">
            <h2>{Building.address}</h2>
            <img  src={`https://testing.tvikonekretnine.com/${Building.img}`} alt="building" width={500} height={500} />
               </div>
          <div className="text-link">
            <p className="des">
            {Building.description}  
            </p>
            <a className="play my-5" style={{textDecoration:'none', color:'white'}} href={`http://${Building.video_link}`}>
                      {/*  <a className="play" style={{textDecoration:'none', color:'white'}} href={`http://youtube.com`}> */}
            <Image src="/assets/play-btn.png" alt="play button" width={60} height={60} />
              <h2 style={{fontSize:22, fontWeight:700}} >VIDEO PREZENTACIJA</h2>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div className="ad-cards section">
      <div className="container">
        <div className="card-wrapper">
          {
             Appartments.map((el,key) => {
              let img = el.main_image? `https://testing.tvikonekretnine.com/${el.main_image}` : "https://st3.depositphotos.com/23594922/31822/v/600/depositphotos_318221368-stock-illustration-missing-picture-page-for-website.jpg"
              
              return(
                <div className="card-ap" key={key} onClick={() => {
                    router.push({
                    pathname:'/apartment',
                    query:{id:el.id}
                  })
                }} >
                  
                  <img src={img} lt="card image" class="cardImg" ></img>
                  <div className="onSale c-info">NA PRODAJU</div>
                <div className="c-info">{el.squarefeet}</div>
                <div className="floors c-info">{el.stage}</div>
                <div className="marked c-info">{el.mark}</div>
              </div>
              )
             })
          }
        
 
        </div>
      </div>
    </div> 
    <Pagination 
     page={Page}
     nextBtn={nextPage}
     prevBtn={prevPage}
  /*    prevBtn={} */
        />
   </>
  );
 
};

export default BuildingPage;
