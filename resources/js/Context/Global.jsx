import React from 'react';

const Context = React.createContext();

// create provider
export const GlobalProvider = ({ children }) => {
    const [state, setState] = React.useState(false)
    const toggle = () => setState(!state)
    return (
        <Context.Provider value={{ state, toggle }}>
            {children}
        </Context.Provider>
    )
}
// create hook
export const useGlobalContext = () => React.useContext(Context)
