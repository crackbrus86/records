import * as React from "react";
import axios from "axios";
import * as CallApi from "../api.services/api.services";

export interface HelloProps{compiler: string; framework: string}

export class Hello extends React.Component<HelloProps>{
    constructor(props){
        super(props);
    }

    componentDidMount(){
        var path = "../wp-content/plugins/records/api/LookupController/";
        // axios.get(path + 'GetDivisionsLkp.php').then((response) => {

        // });
        CallApi.callApi({ url: path + 'GetDivisionsLkp.php', type: CallApi.RequestTypes.GET}).then((result) => {
            let response: CallApi.ResponseModel = result.data;
            if(response.status){
                console.log(response.data);
            }
        });
    }

    render(){
        return <h1>Hello from {this.props.compiler} and {this.props.framework}</h1>
    }
}