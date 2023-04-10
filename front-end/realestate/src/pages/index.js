import Head from 'next/head'
import Image from 'next/image'
import { Inter } from 'next/font/google' 
const inter = Inter({ subsets: ['latin'] })
import BuildingCard from '@/components/buildingCard' 
import axios from 'axios'
import { useState,useEffect } from 'react'
import NavbarComponent from '@/components/navbar'
export default function Home() {

  const [buildings, setbuildings] = useState([])


useEffect(() => {
  axios.get('https://testing.tvikonekretnine.com/api/buildings.php').then((res) => {
    setbuildings(res.data)
    console.log(res.data)
  } )

}, [])



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

      <div className="Section_top"></div>
      <div className="section">
      <div className="overlay"></div>
      <img src="assets/121212121 1.png" alt="flag logo" className="logo-flag" />
      <div className="content1">
        <div className="container">
          <h3 className="lan-heading mt-4">PRONAĐITE STAN PO VAŠOJ MJERI</h3>
          <div className="ad-wrapper">
             {
            buildings.map((el,key) => {
              return (
                <BuildingCard address={el.address} key={key}  img={`https://testing.tvikonekretnine.com/${el.img}`} id={el.id} isCompleted={el.is_completed} />
              )
            })
           }
  
          </div>
        </div>
      </div>
    </div>
    </>
  )
}
