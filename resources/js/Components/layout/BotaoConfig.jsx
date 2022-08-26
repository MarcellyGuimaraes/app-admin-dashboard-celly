import React from 'react';
import {TooltipComponent} from "@syncfusion/ej2-react-popups";
import {FiSettings} from "react-icons/all";
import {useGlobalContext} from "@/Context/Global";

const Layout = () => {
    const {state, toggle} = useGlobalContext();
    return (
        <div className={'tw-flex tw-relative tw-bg-amber-400 tw-h-screen'}>
            <div className={'tw-fixed tw-right-4 tw-bottom-4 tw-z-50'}>
               <TooltipComponent
                     content={'Configurações'}
                        position={'Top'}
               >
                   <button onClick={()=>toggle()} type={'button'} className={'tw-text-3xl tw-p-3 hover:tw-drop-shadow-xl tw-bg-blue-700 tw-rounded-full'}>
                         <FiSettings size={'1.5rem'} className={'tw-text-amber-50'}/>
                   </button>
               </TooltipComponent>
            </div>
            <div className={state ? `tw-bg-amber-50 tw-w-72 tw-h-full tw-duration-300 tw-fixed tw-right-0`: 'tw-w-0 tw-absolute tw-duration-300 tw-fixed tw-right-4'}>
                <p className={`tw-text-black tw-text-center tw-pt-3 tw-relative ${!state ? 'tw-hidden': 'tw-relative'}`}>Configurações</p>
            </div>
        </div>
    );
};

export default Layout;
