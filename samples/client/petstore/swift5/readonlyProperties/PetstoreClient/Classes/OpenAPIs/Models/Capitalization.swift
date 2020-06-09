//
// Capitalization.swift
//
// Generated by openapi-generator
// https://openapi-generator.tech
//

import Foundation


public struct Capitalization: Codable { 


    public private(set) var smallCamel: String?
    public private(set) var capitalCamel: String?
    public private(set) var smallSnake: String?
    public private(set) var capitalSnake: String?
    public private(set) var sCAETHFlowPoints: String?
    /** Name of the pet  */
    public private(set) var ATT_NAME: String?

    public init(smallCamel: String?, capitalCamel: String?, smallSnake: String?, capitalSnake: String?, sCAETHFlowPoints: String?, ATT_NAME: String?) {
        self.smallCamel = smallCamel
        self.capitalCamel = capitalCamel
        self.smallSnake = smallSnake
        self.capitalSnake = capitalSnake
        self.sCAETHFlowPoints = sCAETHFlowPoints
        self.ATT_NAME = ATT_NAME
    }

    public enum CodingKeys: String, CodingKey, CaseIterable { 
        case smallCamel
        case capitalCamel = "CapitalCamel"
        case smallSnake = "small_Snake"
        case capitalSnake = "Capital_Snake"
        case sCAETHFlowPoints = "SCA_ETH_Flow_Points"
        case ATT_NAME
    }

}
