import React from "react";
import BotaoConfig from "@/Components/layout/BotaoConfig";
import {GlobalProvider} from "@/Context/Global";

const Layout = ()=> {
    return (
            <GlobalProvider>
                 <BotaoConfig/>
            </GlobalProvider>
    )
}

export default Layout;
