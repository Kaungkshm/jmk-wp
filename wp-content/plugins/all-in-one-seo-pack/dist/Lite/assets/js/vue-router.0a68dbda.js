import{s as tt,u as W,d as nt,n as rt,e as Be,r as ot,i as Y,f as N,h as qe,p as ie,g as st,w as ct}from"./vue.runtime.esm-bundler.308f2021.js";/*!
  * vue-router v4.2.4
  * (c) 2023 Eduardo San Martin Morote
  * @license MIT
  */const q=typeof window<"u";function it(e){return e.__esModule||e[Symbol.toStringTag]==="Module"}const S=Object.assign;function ae(e,t){const n={};for(const r in t){const o=t[r];n[r]=L(o)?o.map(e):e(o)}return n}const Q=()=>{},L=Array.isArray,at=/\/$/,lt=e=>e.replace(at,"");function le(e,t,n="/"){let r,o={},l="",p="";const m=t.indexOf("#");let i=t.indexOf("?");return m<i&&m>=0&&(i=-1),i>-1&&(r=t.slice(0,i),l=t.slice(i+1,m>-1?m:t.length),o=e(l)),m>-1&&(r=r||t.slice(0,m),p=t.slice(m,t.length)),r=pt(r??t,n),{fullPath:r+(l&&"?")+l+p,path:r,query:o,hash:p}}function ut(e,t){const n=t.query?e(t.query):"";return t.path+(n&&"?")+n+(t.hash||"")}function Se(e,t){return!t||!e.toLowerCase().startsWith(t.toLowerCase())?e:e.slice(t.length)||"/"}function ft(e,t,n){const r=t.matched.length-1,o=n.matched.length-1;return r>-1&&r===o&&z(t.matched[r],n.matched[o])&&ze(t.params,n.params)&&e(t.query)===e(n.query)&&t.hash===n.hash}function z(e,t){return(e.aliasOf||e)===(t.aliasOf||t)}function ze(e,t){if(Object.keys(e).length!==Object.keys(t).length)return!1;for(const n in e)if(!ht(e[n],t[n]))return!1;return!0}function ht(e,t){return L(e)?Ce(e,t):L(t)?Ce(t,e):e===t}function Ce(e,t){return L(t)?e.length===t.length&&e.every((n,r)=>n===t[r]):e.length===1&&e[0]===t}function pt(e,t){if(e.startsWith("/"))return e;if(!e)return t;const n=t.split("/"),r=e.split("/"),o=r[r.length-1];(o===".."||o===".")&&r.push("");let l=n.length-1,p,m;for(p=0;p<r.length;p++)if(m=r[p],m!==".")if(m==="..")l>1&&l--;else break;return n.slice(0,l).join("/")+"/"+r.slice(p-(p===r.length?1:0)).join("/")}var X;(function(e){e.pop="pop",e.push="push"})(X||(X={}));var F;(function(e){e.back="back",e.forward="forward",e.unknown=""})(F||(F={}));function dt(e){if(!e)if(q){const t=document.querySelector("base");e=t&&t.getAttribute("href")||"/",e=e.replace(/^\w+:\/\/[^\/]+/,"")}else e="/";return e[0]!=="/"&&e[0]!=="#"&&(e="/"+e),lt(e)}const mt=/^[^#]+#/;function gt(e,t){return e.replace(mt,"#")+t}function vt(e,t){const n=document.documentElement.getBoundingClientRect(),r=e.getBoundingClientRect();return{behavior:t.behavior,left:r.left-n.left-(t.left||0),top:r.top-n.top-(t.top||0)}}const te=()=>({left:window.pageXOffset,top:window.pageYOffset});function yt(e){let t;if("el"in e){const n=e.el,r=typeof n=="string"&&n.startsWith("#"),o=typeof n=="string"?r?document.getElementById(n.slice(1)):document.querySelector(n):n;if(!o)return;t=vt(o,e)}else t=e;"scrollBehavior"in document.documentElement.style?window.scrollTo(t):window.scrollTo(t.left!=null?t.left:window.pageXOffset,t.top!=null?t.top:window.pageYOffset)}function _e(e,t){return(history.state?history.state.position-t:-1)+e}const fe=new Map;function Rt(e,t){fe.set(e,t)}function Et(e){const t=fe.get(e);return fe.delete(e),t}let Pt=()=>location.protocol+"//"+location.host;function Ge(e,t){const{pathname:n,search:r,hash:o}=t,l=e.indexOf("#");if(l>-1){let m=o.includes(e.slice(l))?e.slice(l).length:1,i=o.slice(m);return i[0]!=="/"&&(i="/"+i),Se(i,"")}return Se(n,e)+r+o}function wt(e,t,n,r){let o=[],l=[],p=null;const m=({state:u})=>{const g=Ge(e,location),R=n.value,b=t.value;let _=0;if(u){if(n.value=g,t.value=u,p&&p===R){p=null;return}_=b?u.position-b.position:0}else r(g);o.forEach(E=>{E(n.value,R,{delta:_,type:X.pop,direction:_?_>0?F.forward:F.back:F.unknown})})};function i(){p=n.value}function f(u){o.push(u);const g=()=>{const R=o.indexOf(u);R>-1&&o.splice(R,1)};return l.push(g),g}function s(){const{history:u}=window;u.state&&u.replaceState(S({},u.state,{scroll:te()}),"")}function a(){for(const u of l)u();l=[],window.removeEventListener("popstate",m),window.removeEventListener("beforeunload",s)}return window.addEventListener("popstate",m),window.addEventListener("beforeunload",s,{passive:!0}),{pauseListeners:i,listen:f,destroy:a}}function be(e,t,n,r=!1,o=!1){return{back:e,current:t,forward:n,replaced:r,position:window.history.length,scroll:o?te():null}}function St(e){const{history:t,location:n}=window,r={value:Ge(e,n)},o={value:t.state};o.value||l(r.value,{back:null,current:r.value,forward:null,position:t.length-1,replaced:!0,scroll:null},!0);function l(i,f,s){const a=e.indexOf("#"),u=a>-1?(n.host&&document.querySelector("base")?e:e.slice(a))+i:Pt()+e+i;try{t[s?"replaceState":"pushState"](f,"",u),o.value=f}catch(g){console.error(g),n[s?"replace":"assign"](u)}}function p(i,f){const s=S({},t.state,be(o.value.back,i,o.value.forward,!0),f,{position:o.value.position});l(i,s,!0),r.value=i}function m(i,f){const s=S({},o.value,t.state,{forward:i,scroll:te()});l(s.current,s,!0);const a=S({},be(r.value,i,null),{position:s.position+1},f);l(i,a,!1),r.value=i}return{location:r,state:o,push:m,replace:p}}function Ct(e){e=dt(e);const t=St(e),n=wt(e,t.state,t.location,t.replace);function r(l,p=!0){p||n.pauseListeners(),history.go(l)}const o=S({location:"",base:e,go:r,createHref:gt.bind(null,e)},t,n);return Object.defineProperty(o,"location",{enumerable:!0,get:()=>t.location.value}),Object.defineProperty(o,"state",{enumerable:!0,get:()=>t.state.value}),o}function fn(e){return e=location.host?e||location.pathname+location.search:"",e.includes("#")||(e+="#"),Ct(e)}function _t(e){return typeof e=="string"||e&&typeof e=="object"}function Ke(e){return typeof e=="string"||typeof e=="symbol"}const $={path:"/",name:void 0,params:{},query:{},hash:"",fullPath:"/",matched:[],meta:{},redirectedFrom:void 0},Ue=Symbol("");var ke;(function(e){e[e.aborted=4]="aborted",e[e.cancelled=8]="cancelled",e[e.duplicated=16]="duplicated"})(ke||(ke={}));function G(e,t){return S(new Error,{type:e,[Ue]:!0},t)}function T(e,t){return e instanceof Error&&Ue in e&&(t==null||!!(e.type&t))}const Ae="[^/]+?",bt={sensitive:!1,strict:!1,start:!0,end:!0},kt=/[.+*?^${}()[\]/\\]/g;function At(e,t){const n=S({},bt,t),r=[];let o=n.start?"^":"";const l=[];for(const f of e){const s=f.length?[]:[90];n.strict&&!f.length&&(o+="/");for(let a=0;a<f.length;a++){const u=f[a];let g=40+(n.sensitive?.25:0);if(u.type===0)a||(o+="/"),o+=u.value.replace(kt,"\\$&"),g+=40;else if(u.type===1){const{value:R,repeatable:b,optional:_,regexp:E}=u;l.push({name:R,repeatable:b,optional:_});const w=E||Ae;if(w!==Ae){g+=10;try{new RegExp(`(${w})`)}catch(M){throw new Error(`Invalid custom RegExp for param "${R}" (${w}): `+M.message)}}let O=b?`((?:${w})(?:/(?:${w}))*)`:`(${w})`;a||(O=_&&f.length<2?`(?:/${O})`:"/"+O),_&&(O+="?"),o+=O,g+=20,_&&(g+=-8),b&&(g+=-20),w===".*"&&(g+=-50)}s.push(g)}r.push(s)}if(n.strict&&n.end){const f=r.length-1;r[f][r[f].length-1]+=.7000000000000001}n.strict||(o+="/?"),n.end?o+="$":n.strict&&(o+="(?:/|$)");const p=new RegExp(o,n.sensitive?"":"i");function m(f){const s=f.match(p),a={};if(!s)return null;for(let u=1;u<s.length;u++){const g=s[u]||"",R=l[u-1];a[R.name]=g&&R.repeatable?g.split("/"):g}return a}function i(f){let s="",a=!1;for(const u of e){(!a||!s.endsWith("/"))&&(s+="/"),a=!1;for(const g of u)if(g.type===0)s+=g.value;else if(g.type===1){const{value:R,repeatable:b,optional:_}=g,E=R in f?f[R]:"";if(L(E)&&!b)throw new Error(`Provided param "${R}" is an array but it is not repeatable (* or + modifiers)`);const w=L(E)?E.join("/"):E;if(!w)if(_)u.length<2&&(s.endsWith("/")?s=s.slice(0,-1):a=!0);else throw new Error(`Missing required param "${R}"`);s+=w}}return s||"/"}return{re:p,score:r,keys:l,parse:m,stringify:i}}function Ot(e,t){let n=0;for(;n<e.length&&n<t.length;){const r=t[n]-e[n];if(r)return r;n++}return e.length<t.length?e.length===1&&e[0]===40+40?-1:1:e.length>t.length?t.length===1&&t[0]===40+40?1:-1:0}function xt(e,t){let n=0;const r=e.score,o=t.score;for(;n<r.length&&n<o.length;){const l=Ot(r[n],o[n]);if(l)return l;n++}if(Math.abs(o.length-r.length)===1){if(Oe(r))return 1;if(Oe(o))return-1}return o.length-r.length}function Oe(e){const t=e[e.length-1];return e.length>0&&t[t.length-1]<0}const Mt={type:0,value:""},Lt=/[a-zA-Z0-9_]/;function Nt(e){if(!e)return[[]];if(e==="/")return[[Mt]];if(!e.startsWith("/"))throw new Error(`Invalid path "${e}"`);function t(g){throw new Error(`ERR (${n})/"${f}": ${g}`)}let n=0,r=n;const o=[];let l;function p(){l&&o.push(l),l=[]}let m=0,i,f="",s="";function a(){f&&(n===0?l.push({type:0,value:f}):n===1||n===2||n===3?(l.length>1&&(i==="*"||i==="+")&&t(`A repeatable param (${f}) must be alone in its segment. eg: '/:ids+.`),l.push({type:1,value:f,regexp:s,repeatable:i==="*"||i==="+",optional:i==="*"||i==="?"})):t("Invalid state to consume buffer"),f="")}function u(){f+=i}for(;m<e.length;){if(i=e[m++],i==="\\"&&n!==2){r=n,n=4;continue}switch(n){case 0:i==="/"?(f&&a(),p()):i===":"?(a(),n=1):u();break;case 4:u(),n=r;break;case 1:i==="("?n=2:Lt.test(i)?u():(a(),n=0,i!=="*"&&i!=="?"&&i!=="+"&&m--);break;case 2:i===")"?s[s.length-1]=="\\"?s=s.slice(0,-1)+i:n=3:s+=i;break;case 3:a(),n=0,i!=="*"&&i!=="?"&&i!=="+"&&m--,s="";break;default:t("Unknown state");break}}return n===2&&t(`Unfinished custom RegExp for param "${f}"`),a(),p(),o}function It(e,t,n){const r=At(Nt(e.path),n),o=S(r,{record:e,parent:t,children:[],alias:[]});return t&&!o.record.aliasOf==!t.record.aliasOf&&t.children.push(o),o}function Tt(e,t){const n=[],r=new Map;t=Le({strict:!1,end:!0,sensitive:!1},t);function o(s){return r.get(s)}function l(s,a,u){const g=!u,R=$t(s);R.aliasOf=u&&u.record;const b=Le(t,s),_=[R];if("alias"in s){const O=typeof s.alias=="string"?[s.alias]:s.alias;for(const M of O)_.push(S({},R,{components:u?u.record.components:R.components,path:M,aliasOf:u?u.record:R}))}let E,w;for(const O of _){const{path:M}=O;if(a&&M[0]!=="/"){const H=a.record.path,I=H[H.length-1]==="/"?"":"/";O.path=a.record.path+(M&&I+M)}if(E=It(O,a,b),u?u.alias.push(E):(w=w||E,w!==E&&w.alias.push(E),g&&s.name&&!Me(E)&&p(s.name)),R.children){const H=R.children;for(let I=0;I<H.length;I++)l(H[I],E,u&&u.children[I])}u=u||E,(E.record.components&&Object.keys(E.record.components).length||E.record.name||E.record.redirect)&&i(E)}return w?()=>{p(w)}:Q}function p(s){if(Ke(s)){const a=r.get(s);a&&(r.delete(s),n.splice(n.indexOf(a),1),a.children.forEach(p),a.alias.forEach(p))}else{const a=n.indexOf(s);a>-1&&(n.splice(a,1),s.record.name&&r.delete(s.record.name),s.children.forEach(p),s.alias.forEach(p))}}function m(){return n}function i(s){let a=0;for(;a<n.length&&xt(s,n[a])>=0&&(s.record.path!==n[a].record.path||!Ve(s,n[a]));)a++;n.splice(a,0,s),s.record.name&&!Me(s)&&r.set(s.record.name,s)}function f(s,a){let u,g={},R,b;if("name"in s&&s.name){if(u=r.get(s.name),!u)throw G(1,{location:s});b=u.record.name,g=S(xe(a.params,u.keys.filter(w=>!w.optional).map(w=>w.name)),s.params&&xe(s.params,u.keys.map(w=>w.name))),R=u.stringify(g)}else if("path"in s)R=s.path,u=n.find(w=>w.re.test(R)),u&&(g=u.parse(R),b=u.record.name);else{if(u=a.name?r.get(a.name):n.find(w=>w.re.test(a.path)),!u)throw G(1,{location:s,currentLocation:a});b=u.record.name,g=S({},a.params,s.params),R=u.stringify(g)}const _=[];let E=u;for(;E;)_.unshift(E.record),E=E.parent;return{name:b,path:R,params:g,matched:_,meta:Ht(_)}}return e.forEach(s=>l(s)),{addRoute:l,resolve:f,removeRoute:p,getRoutes:m,getRecordMatcher:o}}function xe(e,t){const n={};for(const r of t)r in e&&(n[r]=e[r]);return n}function $t(e){return{path:e.path,redirect:e.redirect,name:e.name,meta:e.meta||{},aliasOf:void 0,beforeEnter:e.beforeEnter,props:jt(e),children:e.children||[],instances:{},leaveGuards:new Set,updateGuards:new Set,enterCallbacks:{},components:"components"in e?e.components||null:e.component&&{default:e.component}}}function jt(e){const t={},n=e.props||!1;if("component"in e)t.default=n;else for(const r in e.components)t[r]=typeof n=="object"?n[r]:n;return t}function Me(e){for(;e;){if(e.record.aliasOf)return!0;e=e.parent}return!1}function Ht(e){return e.reduce((t,n)=>S(t,n.meta),{})}function Le(e,t){const n={};for(const r in e)n[r]=r in t?t[r]:e[r];return n}function Ve(e,t){return t.children.some(n=>n===e||Ve(e,n))}const De=/#/g,Bt=/&/g,qt=/\//g,zt=/=/g,Gt=/\?/g,We=/\+/g,Kt=/%5B/g,Ut=/%5D/g,Qe=/%5E/g,Vt=/%60/g,Fe=/%7B/g,Dt=/%7C/g,Ye=/%7D/g,Wt=/%20/g;function de(e){return encodeURI(""+e).replace(Dt,"|").replace(Kt,"[").replace(Ut,"]")}function Qt(e){return de(e).replace(Fe,"{").replace(Ye,"}").replace(Qe,"^")}function he(e){return de(e).replace(We,"%2B").replace(Wt,"+").replace(De,"%23").replace(Bt,"%26").replace(Vt,"`").replace(Fe,"{").replace(Ye,"}").replace(Qe,"^")}function Ft(e){return he(e).replace(zt,"%3D")}function Yt(e){return de(e).replace(De,"%23").replace(Gt,"%3F")}function Xt(e){return e==null?"":Yt(e).replace(qt,"%2F")}function ee(e){try{return decodeURIComponent(""+e)}catch{}return""+e}function Zt(e){const t={};if(e===""||e==="?")return t;const r=(e[0]==="?"?e.slice(1):e).split("&");for(let o=0;o<r.length;++o){const l=r[o].replace(We," "),p=l.indexOf("="),m=ee(p<0?l:l.slice(0,p)),i=p<0?null:ee(l.slice(p+1));if(m in t){let f=t[m];L(f)||(f=t[m]=[f]),f.push(i)}else t[m]=i}return t}function Ne(e){let t="";for(let n in e){const r=e[n];if(n=Ft(n),r==null){r!==void 0&&(t+=(t.length?"&":"")+n);continue}(L(r)?r.map(l=>l&&he(l)):[r&&he(r)]).forEach(l=>{l!==void 0&&(t+=(t.length?"&":"")+n,l!=null&&(t+="="+l))})}return t}function Jt(e){const t={};for(const n in e){const r=e[n];r!==void 0&&(t[n]=L(r)?r.map(o=>o==null?null:""+o):r==null?r:""+r)}return t}const en=Symbol(""),Ie=Symbol(""),me=Symbol(""),Xe=Symbol(""),pe=Symbol("");function D(){let e=[];function t(r){return e.push(r),()=>{const o=e.indexOf(r);o>-1&&e.splice(o,1)}}function n(){e=[]}return{add:t,list:()=>e.slice(),reset:n}}function j(e,t,n,r,o){const l=r&&(r.enterCallbacks[o]=r.enterCallbacks[o]||[]);return()=>new Promise((p,m)=>{const i=a=>{a===!1?m(G(4,{from:n,to:t})):a instanceof Error?m(a):_t(a)?m(G(2,{from:t,to:a})):(l&&r.enterCallbacks[o]===l&&typeof a=="function"&&l.push(a),p())},f=e.call(r&&r.instances[o],t,n,i);let s=Promise.resolve(f);e.length<3&&(s=s.then(i)),s.catch(a=>m(a))})}function ue(e,t,n,r){const o=[];for(const l of e)for(const p in l.components){let m=l.components[p];if(!(t!=="beforeRouteEnter"&&!l.instances[p]))if(tn(m)){const f=(m.__vccOpts||m)[t];f&&o.push(j(f,n,r,l,p))}else{let i=m();o.push(()=>i.then(f=>{if(!f)return Promise.reject(new Error(`Couldn't resolve component "${p}" at "${l.path}"`));const s=it(f)?f.default:f;l.components[p]=s;const u=(s.__vccOpts||s)[t];return u&&j(u,n,r,l,p)()}))}}return o}function tn(e){return typeof e=="object"||"displayName"in e||"props"in e||"__vccOpts"in e}function Te(e){const t=Y(me),n=Y(Xe),r=N(()=>t.resolve(W(e.to))),o=N(()=>{const{matched:i}=r.value,{length:f}=i,s=i[f-1],a=n.matched;if(!s||!a.length)return-1;const u=a.findIndex(z.bind(null,s));if(u>-1)return u;const g=$e(i[f-2]);return f>1&&$e(s)===g&&a[a.length-1].path!==g?a.findIndex(z.bind(null,i[f-2])):u}),l=N(()=>o.value>-1&&sn(n.params,r.value.params)),p=N(()=>o.value>-1&&o.value===n.matched.length-1&&ze(n.params,r.value.params));function m(i={}){return on(i)?t[W(e.replace)?"replace":"push"](W(e.to)).catch(Q):Promise.resolve()}return{route:r,href:N(()=>r.value.href),isActive:l,isExactActive:p,navigate:m}}const nn=Be({name:"RouterLink",compatConfig:{MODE:3},props:{to:{type:[String,Object],required:!0},replace:Boolean,activeClass:String,exactActiveClass:String,custom:Boolean,ariaCurrentValue:{type:String,default:"page"}},useLink:Te,setup(e,{slots:t}){const n=ot(Te(e)),{options:r}=Y(me),o=N(()=>({[je(e.activeClass,r.linkActiveClass,"router-link-active")]:n.isActive,[je(e.exactActiveClass,r.linkExactActiveClass,"router-link-exact-active")]:n.isExactActive}));return()=>{const l=t.default&&t.default(n);return e.custom?l:qe("a",{"aria-current":n.isExactActive?e.ariaCurrentValue:null,href:n.href,onClick:n.navigate,class:o.value},l)}}}),rn=nn;function on(e){if(!(e.metaKey||e.altKey||e.ctrlKey||e.shiftKey)&&!e.defaultPrevented&&!(e.button!==void 0&&e.button!==0)){if(e.currentTarget&&e.currentTarget.getAttribute){const t=e.currentTarget.getAttribute("target");if(/\b_blank\b/i.test(t))return}return e.preventDefault&&e.preventDefault(),!0}}function sn(e,t){for(const n in t){const r=t[n],o=e[n];if(typeof r=="string"){if(r!==o)return!1}else if(!L(o)||o.length!==r.length||r.some((l,p)=>l!==o[p]))return!1}return!0}function $e(e){return e?e.aliasOf?e.aliasOf.path:e.path:""}const je=(e,t,n)=>e??t??n,cn=Be({name:"RouterView",inheritAttrs:!1,props:{name:{type:String,default:"default"},route:Object},compatConfig:{MODE:3},setup(e,{attrs:t,slots:n}){const r=Y(pe),o=N(()=>e.route||r.value),l=Y(Ie,0),p=N(()=>{let f=W(l);const{matched:s}=o.value;let a;for(;(a=s[f])&&!a.components;)f++;return f}),m=N(()=>o.value.matched[p.value]);ie(Ie,N(()=>p.value+1)),ie(en,m),ie(pe,o);const i=st();return ct(()=>[i.value,m.value,e.name],([f,s,a],[u,g,R])=>{s&&(s.instances[a]=f,g&&g!==s&&f&&f===u&&(s.leaveGuards.size||(s.leaveGuards=g.leaveGuards),s.updateGuards.size||(s.updateGuards=g.updateGuards))),f&&s&&(!g||!z(s,g)||!u)&&(s.enterCallbacks[a]||[]).forEach(b=>b(f))},{flush:"post"}),()=>{const f=o.value,s=e.name,a=m.value,u=a&&a.components[s];if(!u)return He(n.default,{Component:u,route:f});const g=a.props[s],R=g?g===!0?f.params:typeof g=="function"?g(f):g:null,_=qe(u,S({},R,t,{onVnodeUnmounted:E=>{E.component.isUnmounted&&(a.instances[s]=null)},ref:i}));return He(n.default,{Component:_,route:f})||_}}});function He(e,t){if(!e)return null;const n=e(t);return n.length===1?n[0]:n}const an=cn;function hn(e){const t=Tt(e.routes,e),n=e.parseQuery||Zt,r=e.stringifyQuery||Ne,o=e.history,l=D(),p=D(),m=D(),i=tt($);let f=$;q&&e.scrollBehavior&&"scrollRestoration"in history&&(history.scrollRestoration="manual");const s=ae.bind(null,c=>""+c),a=ae.bind(null,Xt),u=ae.bind(null,ee);function g(c,d){let h,v;return Ke(c)?(h=t.getRecordMatcher(c),v=d):v=c,t.addRoute(v,h)}function R(c){const d=t.getRecordMatcher(c);d&&t.removeRoute(d)}function b(){return t.getRoutes().map(c=>c.record)}function _(c){return!!t.getRecordMatcher(c)}function E(c,d){if(d=S({},d||i.value),typeof c=="string"){const y=le(n,c,d.path),A=t.resolve({path:y.path},d),V=o.createHref(y.fullPath);return S(y,A,{params:u(A.params),hash:ee(y.hash),redirectedFrom:void 0,href:V})}let h;if("path"in c)h=S({},c,{path:le(n,c.path,d.path).path});else{const y=S({},c.params);for(const A in y)y[A]==null&&delete y[A];h=S({},c,{params:a(y)}),d.params=a(d.params)}const v=t.resolve(h,d),C=c.hash||"";v.params=s(u(v.params));const k=ut(r,S({},c,{hash:Qt(C),path:v.path})),P=o.createHref(k);return S({fullPath:k,hash:C,query:r===Ne?Jt(c.query):c.query||{}},v,{redirectedFrom:void 0,href:P})}function w(c){return typeof c=="string"?le(n,c,i.value.path):S({},c)}function O(c,d){if(f!==c)return G(8,{from:d,to:c})}function M(c){return K(c)}function H(c){return M(S(w(c),{replace:!0}))}function I(c){const d=c.matched[c.matched.length-1];if(d&&d.redirect){const{redirect:h}=d;let v=typeof h=="function"?h(c):h;return typeof v=="string"&&(v=v.includes("?")||v.includes("#")?v=w(v):{path:v},v.params={}),S({query:c.query,hash:c.hash,params:"path"in v?{}:c.params},v)}}function K(c,d){const h=f=E(c),v=i.value,C=c.state,k=c.force,P=c.replace===!0,y=I(h);if(y)return K(S(w(y),{state:typeof y=="object"?S({},C,y.state):C,force:k,replace:P}),d||h);const A=h;A.redirectedFrom=d;let V;return!k&&ft(r,v,h)&&(V=G(16,{to:A,from:v}),Pe(v,v,!0,!1)),(V?Promise.resolve(V):ve(A,v)).catch(x=>T(x)?T(x,2)?x:oe(x):re(x,A,v)).then(x=>{if(x){if(T(x,2))return K(S({replace:P},w(x.to),{state:typeof x.to=="object"?S({},C,x.to.state):C,force:k}),d||A)}else x=Re(A,v,!0,P,C);return ye(A,v,x),x})}function Ze(c,d){const h=O(c,d);return h?Promise.reject(h):Promise.resolve()}function ge(c){const d=J.values().next().value;return d&&typeof d.runWithContext=="function"?d.runWithContext(c):c()}function ve(c,d){let h;const[v,C,k]=ln(c,d);h=ue(v.reverse(),"beforeRouteLeave",c,d);for(const y of v)y.leaveGuards.forEach(A=>{h.push(j(A,c,d))});const P=Ze.bind(null,c,d);return h.push(P),B(h).then(()=>{h=[];for(const y of l.list())h.push(j(y,c,d));return h.push(P),B(h)}).then(()=>{h=ue(C,"beforeRouteUpdate",c,d);for(const y of C)y.updateGuards.forEach(A=>{h.push(j(A,c,d))});return h.push(P),B(h)}).then(()=>{h=[];for(const y of k)if(y.beforeEnter)if(L(y.beforeEnter))for(const A of y.beforeEnter)h.push(j(A,c,d));else h.push(j(y.beforeEnter,c,d));return h.push(P),B(h)}).then(()=>(c.matched.forEach(y=>y.enterCallbacks={}),h=ue(k,"beforeRouteEnter",c,d),h.push(P),B(h))).then(()=>{h=[];for(const y of p.list())h.push(j(y,c,d));return h.push(P),B(h)}).catch(y=>T(y,8)?y:Promise.reject(y))}function ye(c,d,h){m.list().forEach(v=>ge(()=>v(c,d,h)))}function Re(c,d,h,v,C){const k=O(c,d);if(k)return k;const P=d===$,y=q?history.state:{};h&&(v||P?o.replace(c.fullPath,S({scroll:P&&y&&y.scroll},C)):o.push(c.fullPath,C)),i.value=c,Pe(c,d,h,P),oe()}let U;function Je(){U||(U=o.listen((c,d,h)=>{if(!we.listening)return;const v=E(c),C=I(v);if(C){K(S(C,{replace:!0}),v).catch(Q);return}f=v;const k=i.value;q&&Rt(_e(k.fullPath,h.delta),te()),ve(v,k).catch(P=>T(P,12)?P:T(P,2)?(K(P.to,v).then(y=>{T(y,20)&&!h.delta&&h.type===X.pop&&o.go(-1,!1)}).catch(Q),Promise.reject()):(h.delta&&o.go(-h.delta,!1),re(P,v,k))).then(P=>{P=P||Re(v,k,!1),P&&(h.delta&&!T(P,8)?o.go(-h.delta,!1):h.type===X.pop&&T(P,20)&&o.go(-1,!1)),ye(v,k,P)}).catch(Q)}))}let ne=D(),Ee=D(),Z;function re(c,d,h){oe(c);const v=Ee.list();return v.length?v.forEach(C=>C(c,d,h)):console.error(c),Promise.reject(c)}function et(){return Z&&i.value!==$?Promise.resolve():new Promise((c,d)=>{ne.add([c,d])})}function oe(c){return Z||(Z=!c,Je(),ne.list().forEach(([d,h])=>c?h(c):d()),ne.reset()),c}function Pe(c,d,h,v){const{scrollBehavior:C}=e;if(!q||!C)return Promise.resolve();const k=!h&&Et(_e(c.fullPath,0))||(v||!h)&&history.state&&history.state.scroll||null;return rt().then(()=>C(c,d,k)).then(P=>P&&yt(P)).catch(P=>re(P,c,d))}const se=c=>o.go(c);let ce;const J=new Set,we={currentRoute:i,listening:!0,addRoute:g,removeRoute:R,hasRoute:_,getRoutes:b,resolve:E,options:e,push:M,replace:H,go:se,back:()=>se(-1),forward:()=>se(1),beforeEach:l.add,beforeResolve:p.add,afterEach:m.add,onError:Ee.add,isReady:et,install(c){const d=this;c.component("RouterLink",rn),c.component("RouterView",an),c.config.globalProperties.$router=d,Object.defineProperty(c.config.globalProperties,"$route",{enumerable:!0,get:()=>W(i)}),q&&!ce&&i.value===$&&(ce=!0,M(o.location).catch(C=>{}));const h={};for(const C in $)Object.defineProperty(h,C,{get:()=>i.value[C],enumerable:!0});c.provide(me,d),c.provide(Xe,nt(h)),c.provide(pe,i);const v=c.unmount;J.add(c),c.unmount=function(){J.delete(c),J.size<1&&(f=$,U&&U(),U=null,i.value=$,ce=!1,Z=!1),v()}}};function B(c){return c.reduce((d,h)=>d.then(()=>ge(h)),Promise.resolve())}return we}function ln(e,t){const n=[],r=[],o=[],l=Math.max(t.matched.length,e.matched.length);for(let p=0;p<l;p++){const m=t.matched[p];m&&(e.matched.find(f=>z(f,m))?r.push(m):n.push(m));const i=e.matched[p];i&&(t.matched.find(f=>z(f,i))||o.push(i))}return[n,r,o]}export{fn as a,Ct as b,hn as c};
