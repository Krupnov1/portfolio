"use strict"

const womenContWomBlockElement = {
    name: 'women-cont-wom-block-element',
    template: `
    <div class="wrapper-women contWomBlock">
        <div class="moschino">
            <h5>WOMEN COLLECTION</h5>
            <div class="bordMosch brdMoschLeft"></div>
            <div class="activBord"></div>
            <div class="bordMosch brdMoschRight"></div>
            <h4>Moschino Cheap And Chic</h4>
            <p>Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate collaborative architectures before cutting-edge services. Completely visualize parallel core competencies rather than exceptional portals.</p>
            <div class="matMosch">
                <div class="matCott">MATERIAL:<span>COTTON</span></div> 
                <div class="desBin">DESIGNER: <span>BINBURHAN</span></div>
            </div>
            <div class="price">$561</div> 
            <div class="matMoschBord"></div>
            <form class="contWomForm" action="#">
                <div>
                    <h5>CHOOSE COLOR</h5>
                    <div class="colorRedCh">
                        <div class="redChoose"></div>
                        <select class="redSel" name="#">
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="black">Black</option>
                        </select>
                    </div>
                </div>
                <div>
                    <h5>CHOOSE SIZE</h5>
                    <select name="#">
                        <option value="XXL">XXL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXL">XXL</option>
                    </select>
                </div>
                <div>
                    <h5>QUANTITY</h5>
                    <input class="quant" type="text" placeholder="2">
                </div>
                <button>
                    <img src="images/singlPg-02.svg" alt="backet">
                    <span>Add to Cart</span>
                </button>
            </form>
        </div>
    </div>`
};

export default womenContWomBlockElement;