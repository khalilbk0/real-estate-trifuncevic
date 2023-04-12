
import { useState,useEffect } from "react"
const Pagination = ({nextBtn,prevBtn,page}) => {

const [Page, setPage] = useState(page)

    useEffect(() => {
     
        setPage(page)
     
    }, [page,nextBtn,prevBtn])
    
    return (
        <div class="next-prev">
      <div class="btns">
        <button class="prev" >
          <img src="/assets/previous.png" alt="previous button" />
        </button>

        <button class="next" onClick={nextBtn} >
          <img src="/assets/next.png" alt="next button"   />
        </button>
      </div>
      <div class="number-page">STRANICA BROJ: {page}</div>
    </div>
    )
   }
   export default Pagination