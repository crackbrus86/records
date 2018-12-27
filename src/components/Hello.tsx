import * as React from "react";
import axios from "axios";

export interface HelloProps{compiler: string; framework: string}

export class Hello extends React.Component<HelloProps>{
    constructor(props){
        super(props);
    }

    componentDidMount(){
        var path = "../wp-content/plugins/records/api/LookupController/";
        axios.get(path + 'GetDivisionsLkp.php').then((response) => {

        });
    }

    render(){
        return <h1>Hello from {this.props.compiler} and {this.props.framework}</h1>
    }
}