import React, { useState, useEffect } from 'react';
import Image from 'next/image';
import axios from 'axios';   
import { useRouter } from 'next/router'
import Pagination from '@/components/pagination';
import NavbarComponent from '@/components/navbar';
import BuildingCard from '@/components/buildingCard';
import Head from 'next/head';
import Link from 'next/link';
const GraragePage = ({params}) => {
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
  const [Page, setPage] = useState(1)
  const [buildings, setbuildings] = useState([])


  useEffect(() => {
    axios.get('https://testing.tvikonekretnine.com/api/buildingGarage.php').then((res) => {
      const array = Object.values(res.data)  
      setbuildings(array)
    });
  }, []); // Add empty array as second argument
  
  useEffect(() => {
    console.log(buildings);
  }, [buildings]); 
 

 
   return (
   <> 
      <Head>
        <title>Real Estate </title>
        <meta name="description" content="Generated by create next app" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="/favicon.ico" />
        
<script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link
          href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap"
          rel="stylesheet"
        />
        <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
  crossorigin="anonymous"
/>
      </Head>

      <NavbarComponent/>
   <div className="Section_top"></div>
      <div className="section">
      <div className="overlay"></div>
      <img src="assets/121212121 1.png" alt="flag logo" className="logo-flag" />
      <div className="content1">
        <div className="container">
          <h3 className="lan-heading mt-4">GARAŽE</h3>
          <div className="ad-wrapper">
             {
            buildings.map((el,key) => {
              return (
                <div className="ad-card"  key={key} >
    
                <Link href={{ pathname: '/building-garages', query: { id: el.id } }} style={{textDecoration:'none',margin:'auto'}}>
                  <img
                    src={"https://testing.tvikonekretnine.com/"+el.img}
                    alt="card image"
                    className="card-image"
                  />
                  <div className="address-card">{el.buildingName}</div>
                  <div className="stage">{el.description}</div> 
                </Link>
              </div>
              )
            })
           }
  
          </div>
        </div>
      </div>
    </div>
 
   </>
  );
 
};

export default GraragePage;
