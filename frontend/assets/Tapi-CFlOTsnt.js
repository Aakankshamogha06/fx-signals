import{a as u,b as j,r as a,t as d,j as e,o as p,T as v,p as m}from"./index-0nI_9cVk.js";const w=()=>{var i;const{tapi:r,loading:c}=u(t=>t.tapi),s=j(),[l,o]=a.useState("...");a.useEffect(()=>{s(d());const t=setInterval(()=>{s(d())},5e3);return()=>clearInterval(t)},[s]);const h=t=>{window.open("https://yamarkets.com/","_blank")},x=t=>({color:t==="Sell"?"green":t==="Buy"?"red":"inherit"});return a.useEffect(()=>{const t=setInterval(()=>{o(n=>{switch(n){case"...":return"..";case"..":return".";case".":return"";default:return"..."}})},1e3);return()=>clearInterval(t)},[]),e.jsx("div",{children:e.jsxs(p,{className:"mt-4",children:[e.jsx("h2",{children:"Trading Signals"}),c?e.jsx("p",{children:"Loading..."}):e.jsxs(v,{responsive:!0,striped:!0,bordered:!0,hover:!0,vertical:!0,className:"align-middle",children:[e.jsx("thead",{children:e.jsxs("tr",{children:[e.jsx("th",{children:"Pair"}),e.jsx("th",{children:"Action"}),e.jsx("th",{width:"200px",children:"Status"}),e.jsx("th",{children:"Stop Loss"}),e.jsx("th",{children:"Take Profit"}),e.jsx("th",{width:"170px",children:"Trade Now"})]})}),e.jsx("tbody",{children:(i=r==null?void 0:r.LiveSignals)==null?void 0:i.map((t,n)=>e.jsxs("tr",{children:[e.jsx("td",{children:t.pair}),e.jsx("td",{style:x(t.action),children:t.action}),e.jsxs("td",{children:[t.status,l]}),e.jsx("td",{children:t.stopLoss}),e.jsx("td",{children:t.takeProfit}),e.jsx("td",{children:e.jsx(m,{variant:"primary",onClick:()=>h(),children:"Trade Now"})})]},n))})]})]})})};export{w as default};
