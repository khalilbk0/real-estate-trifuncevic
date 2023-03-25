import React, { useState, useEffect } from 'react';
import axios from 'axios'; 
import Hero from '@/components/hero';
const BuildingPage = () => {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    const response = await axios.get('https://jsonplaceholder.typicode.com/todos/1');
    const data = await response;
    setData(data);
  };

  return (
    <div> 
      <Hero title={'Neka vaša potraga za savršenim domom bude jednostavna i ugodna.'} img={'https://images.unsplash.com/photo-1579847188804-ecba0e2ea330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=748&q=80'} /> 
    </div>
  );
};

export default BuildingPage;
