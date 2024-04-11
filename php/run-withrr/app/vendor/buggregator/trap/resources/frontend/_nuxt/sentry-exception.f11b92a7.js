import{E as u,I as T}from"./layout-sidebar.vue.66485d1b.js";import{d as v,q as S,c as b,o as n,a as o,b as r,e as x,t as c,h as l,g as k,n as h,u as E,F as d,r as m,_ as g,x as L}from"./entry.769d5560.js";const F=t=>{var s,a;return{id:t.uuid,type:u.SENTRY,labels:[u.SENTRY,"exception"],origin:{logger:t.payload.logger,environment:t.payload.environment,release:((s=t.payload)==null?void 0:s.release)||"-"},serverName:((a=t.payload)==null?void 0:a.server_name)||"",date:t.timestamp?new Date(t.timestamp*1e3):null,payload:t.payload}},K=()=>({normalizeSentryEvent:F}),H={class:"sentry-exception-frame__head-title"},M={key:0},B={key:0,class:"sentry-exception-frame__body"},N={class:"sentry-exception-frame__body-line-position"},$=["innerHTML"],C={key:1,class:"sentry-exception-frame__body-line sentry-exception-frame__body-line--selection"},I={class:"sentry-exception-frame__body-line-position"},O=["innerHTML"],V={class:"sentry-exception-frame__body-line-position"},Y=["innerHTML"],z=v({__name:"sentry-exception-frame",props:{frame:{},isOpen:{type:Boolean}},setup(t){const s=t,a=S(s.isOpen),i=b(()=>!!(s.frame.context_line||s.frame.post_context||s.frame.pre_context)),y=()=>{i.value&&(a.value=!a.value)};return(e,f)=>(n(),o("div",{class:h(["sentry-exception-frame",{"sentry-exception-frame--empty":!i.value}])},[r("div",{class:"sentry-exception-frame__head",onClick:y},[r("div",H,[x(c(e.frame.filename)+" ",1),e.frame.function?(n(),o("span",M," in "+c(e.frame.function)+" at line ",1)):l("",!0),x(" "+c(e.frame.lineno),1)]),e.frame.pre_context?(n(),k(E(T),{key:0,class:h(["sentry-exception-frame__head-title-dd",{"sentry-exception-frame__head-title-dd--visible":a.value}]),name:"dd"},null,8,["class"])):l("",!0)]),a.value&&i.value?(n(),o("div",B,[e.frame.pre_context?(n(!0),o(d,{key:0},m(e.frame.pre_context,(p,_)=>(n(),o("div",{key:p,class:"sentry-exception-frame__body-line"},[r("div",N,c(e.frame.lineno-(e.frame.pre_context.length-_))+". ",1),r("pre",{class:"sentry-exception-frame__body-line-content",innerHTML:p},null,8,$)]))),128)):l("",!0),e.frame.context_line?(n(),o("div",C,[r("div",I,c(e.frame.lineno)+". ",1),r("pre",{innerHTML:e.frame.context_line},null,8,O)])):l("",!0),e.frame.post_context?(n(!0),o(d,{key:2},m(e.frame.post_context,(p,_)=>(n(),o("div",{key:p,class:"sentry-exception-frame__body-line"},[r("div",V,c(e.frame.lineno+_+1)+". ",1),r("pre",{class:"sentry-exception-frame__body-line-content",innerHTML:p},null,8,Y)]))),128)):l("",!0)])):l("",!0)],2))}}),D=g(z,[["__scopeId","data-v-13d9bb3e"]]),R={class:"sentry-exception"},q={class:"sentry-exception__header"},w={class:"sentry-exception__title"},P=["innerHTML"],j={key:0,class:"sentry-exception__frames"},A=v({__name:"sentry-exception",props:{exception:{},maxFrames:{default:3}},setup(t){const s=t,a=b(()=>{const i=s.exception.stacktrace.frames||[];return s.maxFrames>0?i.reverse().slice(0,s.maxFrames):i});return(i,y)=>(n(),o("div",R,[L(i.$slots,"default",{},()=>[r("header",q,[r("h3",w,c(i.exception.type),1),r("pre",{class:"sentry-exception__text",innerHTML:i.exception.value},null,8,P)])],!0),a.value.length?(n(),o("div",j,[(n(!0),o(d,null,m(a.value,(e,f)=>(n(),k(D,{key:e.context_line,frame:e,"is-open":f===0},null,8,["frame","is-open"]))),128))])):l("",!0)]))}}),Q=g(A,[["__scopeId","data-v-e5d092a4"]]);export{Q as S,K as u};
