import Link from 'next/link'
import React, { useEffect } from 'react'
import { useState } from 'react'
import Image from 'next/image'
function BuildingCard({img,address,isCompleted,id}) {
 
    const [Status, setStatus] = useState("U IZGRADNJI")
 useEffect(() => {
   
    if(isCompleted == "1"){
        setStatus("USELJIV OBJEKAT")
    }
  
 }, [isCompleted])
 

  return (
    <div className="ad-card">
    
    <Link href={{ pathname: '/building', query: { id: id } }} style={{textDecoration:'none',margin:'auto'}}>
      <img
        src={img}
        alt="card image"
        className="card-image"
      />
      <div className="address-card">{address}</div>
      <div className="stage">{Status}</div>
      <button className="more">POGLEDAJTE VIŠE</button>
    </Link>
  </div>
  )
}

export default BuildingCard