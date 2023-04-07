import React, { useState, useEffect } from 'react';
import Image from 'next/image';
import axios from 'axios';   
import { useRouter } from 'next/router'
import Pagination from '@/components/pagination';
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
      axios.get('http://localhost:1234/api/buildings.php?id='+id).then((res) => {
    
       res.data.map((el,key) => {
        if(el[0] == id ){
          setBuilding(el)
        }
       }) 
      } )
 
    axios.get('http://localhost:1234/api/appartmentById.php?id='+id).then((res) => {
        console.log(res.data)
        setAppartments(res.data)
        console.log(Appartments)
       } )  
  
   }  
   
  }, [router.isReady])

 
   return (
   <> 
   <div className="building-section section">
      <div className="container">
        <div className="build-wrap">
          <div className="heading-img">
            <h2>{Building.address} Adress </h2>
            <img  src={`http://localhost:1234/${Building.img}`} alt="building" width={500} height={500} />
               </div>
          <div className="text-link">
            <p className="des">
            {Building.description} Description
            </p>
            <a className="play" style={{textDecoration:'none', color:'white'}} href={`http://${Building.video_link}`}>
                      {/*  <a className="play" style={{textDecoration:'none', color:'white'}} href={`http://youtube.com`}> */}
            <Image src="/assets/play-btn.png" alt="play button" width={60} height={60} />
              <h2>VIDEO PREZENTACIJA</h2>
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
              return(
                <div className="card-appartment" key={key} onClick={() => {
                  router.push({
                    pathname:'/apartment',
                    query:{id:el.id}
                  })
                }} >
                  <img src={`http://localhost:1234/${el.main_image}`} alt="card image" class="cardImg"></img>
                  <div className="onSale c-info">NA PRODAJU</div>
                <div className="squarefeet c-info">{el.squarefeet}</div>
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
